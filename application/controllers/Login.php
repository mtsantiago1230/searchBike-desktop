<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends APP_Controller {
    function __construct()
    {
        parent::__construct();
        // se carga el modelo
        $this->load->model('users');
    }
    //-- funcion para el logeo --//
    public function index()
    {
       
        // se piden los datos que se ingresaron en la view login
        $usuario = $this->input->post('iniciarUser');
        $password = $this->input->post('iniciarPass');

        // se coje el usuario y se envia el modelo
        $query = $this->users->dregistro($usuario,$password);
        // die(debug($usuario,$password,$query));
         // se valida la contraseña y el n°doc para poder ingresar
        if ($query != null) {
            // se crear la session mediante un array
            $data = array(
                'usuario' => $usuario, 
                'id' => 0, 
                'login' => true, 
                "consulta" => $query                     
            );

            // Asi se obtiene la informacion
            $this->session->set_userdata($data);

            // se enviar a la vista de los datos
            echo json_encode("registrado",200);
         
                
        } else {
            // se enviar a la vista principal              
            
            echo json_encode("Datos Incorrectos",200);  
        }
           
    }
    //-- funcion para registrarse --//
    public function registro()
    {        
        //  1. pido los datos del usuario
        $RegNombre    = $this->input->post('RegNombre');
        $RegApellido  = $this->input->post('RegApellido');
        $RegTipoDoc   = $this->input->post('RegTipoDoc');
        $RegCC        = $this->input->post('RegCC');
        $RegGenero    = $this->input->post('RegGenero');
        $RegFechaN    = $this->input->post('RegFechaN');
        $RegCiudad    = $this->input->post('RegCiudad');
        $RegEstrato   = $this->input->post('RegEstrato');
        $RegDireccion = $this->input->post('RegDireccion');
        $RegCelular   = $this->input->post('RegCelular');
        $RegEmail     = $this->input->post('RegEmail');
        $RegInteres   = $this->input->post('RegInteres');
        $RegGrupoS    = $this->input->post('RegGrupoS');
        $RegContactoE = $this->input->post('RegContactoE');
        $password     = $this->input->post('password');
        $NomContactoE = $this->input->post('NomContactoE');
      
        // realizamos un aconsulta para evitar duplicados 
        $consulta = $this->db-> get_where("usuario",  array ( 'email'  =>  $RegEmail  ));
        $consulta=$consulta->row();
       //die(debug($consulta));
        if( $consulta==null){
            // verificar si existe y no esta vacio los datos anteriores
            if  (   isset($RegNombre)      && !empty($RegNombre)      && isset($RegApellido)   && !empty($RegApellido)   &&
                    isset($RegTipoDoc)     && !empty($RegTipoDoc)     && isset($RegCC)         && !empty($RegCC)         &&
                    isset($RegGenero)      && !empty($RegGenero)      && isset($RegFechaN)     && !empty($RegFechaN)     &&
                    isset($RegCiudad)      && !empty($RegCiudad)      && isset($RegEstrato)    && !empty($RegEstrato)    &&
                    isset($RegDireccion)   && !empty($RegDireccion)   && isset($RegCelular)    && !empty($RegCelular)    &&
                    isset($RegEmail)       && !empty($RegEmail)       && isset($RegGrupoS)     && !empty($RegGrupoS)     && 
                    isset($RegContactoE)   && !empty($RegContactoE)   && isset($NomContactoE)   && !empty($NomContactoE) &&
                    isset($password)       && !empty($password)
                   
                  
                )
            {
                // se crea un array con todos los datos del usuario
                $data = array(
                    'nombres'               => $RegNombre,
                    'apellidos'             => $RegApellido,
                    'tipo_Doc'              => $RegTipoDoc,
                    'numero_Doc'            => $RegCC,
                    'genero'                => $RegGenero,
                    'fecha_nacimiento'      => $RegFechaN,
                    'ciudad'                => $RegCiudad,
                    'estrato'               => $RegEstrato,
                    'direccion'             => $RegDireccion,
                    'celular'               => $RegCelular,
                    'email'                 => $RegEmail,
                    'interes'               => $RegInteres,
                    'grupo_Sanguineo'       => $RegGrupoS,
                    'Nombre_Contacto_Emergencia'=> $NomContactoE,
                    'contacto_Emergencia'   => $RegContactoE,
                    'imagen_Perfil'         => null,
                    "bloqueado"             => null,
                    "fecha_registro"        => date("y-m-d"),
                    "reportado"             =>null
                );
                //--- se inserta los datos en la tabla de usuarios 
               $this->db->insert('usuario', $data);
                //-- traemos el id de la ultima insercion para asociarlo con la bcicleta 
                $id_Usuario= $this->db->insert_id();
                // creamos el array con los datos de la bicicleta
				$bici=$this->input->post("bici");
                foreach ( $bici as $key => $value) {
                    $query[$key] = $this->users->consultaUsers($value["RegNumeroSerie"]);
                    $bike[$key]=array(   
                        'id_Usuario' => $id_Usuario,
                        'marca'      => $value ["RegMarca"],
                        'referencia' => $value["RegNumeroSerie"],
                        'numero_Serie'     => $value["RegNumeroSerie"],
                        'color'      => $value["RegColor"],
                        'tipo_Bicicleta' => $value['RegTipoB'],
                        'id_Estado'     => $value['RegEstado'],
                        'imagen_Bicicleta'=> null,
                        'imagen_Numero_Serie'=>null, 
                        'fecha_Registro'=> date("y-m-d") ,
                        "ID_Usuario_Primer"=>isset($query[$key]["id_Usuario"])?$query[$key]["id_Usuario"]:null,
                        "ID_Usuario_bloqueado"=>isset($query[$key]["id_Usuario"])?$id_Usuario:null,
                        'fecha_Actualizacion'=> date("y-m-d")
                    );
                    /// si hay bicicletas registradas con el mismo numero de serie
                    if( $query[$key]){
                        $this->db->where('id_Usuario', $id_Usuario)
                        ->update(USERS, array("bloqueado"=>1));
                    
                        $this->db->where('id_Bicicleta', $query[$key]['id_Bicicleta'])
                        ->update(BICI, array("ID_Usuario_bloqueado"=>$id_Usuario,"reportado"=>true));

                    }
                    
                }
                $login=array(
                    "id_Usuario"=>$id_Usuario,
                    "usuario_Email"=>$RegEmail,
                    "password"=>$password,
                    "fecha_Registro"=>date("y-m-d"),
                );
                
                //-- insertamos los datos a la tabla de bicicletas
                $this->db->insert_batch('bicicleta', $bike);
                $this->db->insert('login', $login);
               echo json_encode("Registro Exitoso",200);
             
            }else
            echo  json_encode("Llene todos los datos",205);
        }else{
            echo  json_encode("El correo Ya se Encuentra Registrado",205);
        }

    }
    // funcion para cerrar sesion
    public function logout()
    {
        // se destruye la session        
        $this->session->sess_destroy();
        header ("Location: " . base_url());
    }
    // funcion para reportar la bike   
    public function reporte()
    {
        //cargo el model
        $this->load->model('users');
        $data=$this->input->post();
        
        $data["Hurto_o_Recuperada"]=="robada" ? $estado=1:$estado=0;
        //-- para actualizar la bicicleta en el estado
        $actualizar=array(
            "id_Estado"=>$estado,
        );
        // array para el reporte
        $report=array(
            "id_Bicicleta"=>$data["id_Bicicleta"],
            "Hurto_o_Recuperada"=>$data["Hurto_o_Recuperada"],
            "fecha_Hurto_o_Recuperacion"=>$data["fecha_Hurto_o_Recuperacion"],
            "lugar_Hurto_o_Recuperacion"=>$data["Lugar"],
            "descripcion"=>$data["descripcion"],
            "numero_serie"=>$data["numero_Serie"],
        );
        
       //query para actualizar dependiendo del id
        $this->db->where('id_Bicicleta', $data["id_Bicicleta"])
                        ->update('bicicleta', $actualizar);
                  
        //query del registro  del hurto o recuperacion   
       $this->db->insert(HURTO, $report);
       $query = $this->users->dregistro($data["email"],$data["password"]);
       $data = array(
           'usuario' => $data['email'], 
           'id' => 0, 
           'login' => true, 
           "consulta" => $query                     
       );

       // Asi se obtiene la informacion
       $this->session->set_userdata($data);
       $this->datospersonales();
    }
    //-- funcion para ver los datos personales --//
    public function datospersonales()
    {
        //se carga la session
        $personales = $this->session->userdata("consulta");
        //enviar los datos a la vista
        $data["consulta"]  = $personales;
        $this->load->view('header/header');
        $this->load->view('sistema/datospersonales',$data);
        $this->load->view('footer/footer');	
    }
    // funcion para registrar una bicicleta desde la sesion
    function registrarbici(){
        $data=$this->input->post();
       
        $bike=array(   
            'id_Usuario'            => $data['id_Usuario'],
            'marca'                 => $data ["marca"],
            'referencia'            => $data["referencia"],
            'numero_Serie'          => $data["numero_Serie"],
            'color'                 => $data["color"],
            'tipo_Bicicleta'        => $data['tipo_Bicicleta'],
            'id_Estado'             => $data['id_Estado'],
            'imagen_Bicicleta'      => null,
            'imagen_Numero_Serie'   =>null, 
            'fecha_Registro'        => date("y-m-d") ,
            'fecha_Actualizacion'   => date("y-m-d")
        );
   
        $result=$this->users->registrarbici( $bike);

        
        $query = $this->users->dregistro($data["email"],$data["password"]);
        $data = array(
            'usuario' => $data['email'], 
            'id' => 0, 
            'login' => true, 
            "consulta" => $query                     
        );

        // Asi se obtiene la informacion
        $this->session->set_userdata($data);
        $this->datospersonales();
      
    }
    //--- funcion para actualizar datos del usuario
    function Actualizar(){

        $data=$this->input->post();
        $user=array(
            "nombres"=>$data["nombres"],
            "apellidos"=>$data["apellidos"],
            "direccion"=>$data["direccion"],
            "celular"=>$data["celular"],
            "email"=>trim($data["email"]),
            "grupo_Sanguineo"=>$data["grupo_Sanguineo"],
            "contacto_Emergencia"=>$data["contacto_Emergencia"],
            "Nombre_Contacto_Emergencia"=>$data["Nombre_Contacto_Emergencia"],
        );

        $login=array(
            "usuario_Email"=>trim($data["email"]),
            "password"=>$data["password"]
        );

           //query para actualizar dependiendo del id 
        $this->db->where('id_Usuario', $data["id_Usuario"])
           ->update(USERS, $user);
        $this->db->where('id_Usuario', $data["id_Usuario"])
           ->update(LOGIN, $login);

        $query = $this->users->dregistro($data["email"],$data["password"]);
        $data = array(
               'usuario' => $data['email'], 
               'id' => 0, 
               'login' => true, 
               "consulta" => $query                     
         );
           // Asi se obtiene la informacion
       $this->session->set_userdata($data);
       $this->datospersonales();
        
    }
    // funxcion para restaurar contraseña
    function Restaurar(){
        $data= $this->input->post();
        $query = $this->users->restaurar($data["email"]);
        if( $query){
        $mail = $data["email"];
        $nombre = $query["nombres"];
        $apellido=$query["apellidos"];
        $email = $mail;
        $password= $query["password"];
        $thank="login";

        // Varios destinatarios
        $para  = $mail; // atención a la coma
        // título
        $título = 'Recordatorio de Clave SearchBike';
        // mensaje
        $mensaje = '
        <html>
            <head>
                <title>Recordatorio de Clave SearchBike</title>
            </head>
            <body>
                <p> Hola '.$nombre.' '.$apellido.' hemos recibido una solicitud de la restauración de tu contraseña, estos son los datos correspondientes de tu cuenta</p>
                </p>
                <table>
                    <tr>
                        <th>Tu usuario es:</th><th>Tu contraseña es</th>
                    </tr>
                    <tr>
                        <td>'. $email.'</td><td>'.$password.'</td>
                    </tr>
           
                </table>
            </body>
        </html>';

        // Para enviar un correo HTML, debe establecerse la cabecera Content-type
        $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
        $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        // Cabeceras adicionales
        $cabeceras .= 'From: SoporteSearchBike <SoporteSearchBike@search-bike.com>' . "\r\n";
        // Enviarlo
            mail($para, $título, $mensaje, $cabeceras);
            echo json_encode("registrado",200);
        }else
        echo json_encode("No_registrado",205);
        
    }
    // funcion para cargar la foto del perfil
    function foto(){
        $email=$_SESSION["consulta"]["0"]["email"];
        $password=$_SESSION["consulta"]["0"]["password"];
        $id_Usuario=$_SESSION["consulta"]["0"]["id_Usuario"];
        $mi_archivo = 'mi_archivo';
        $config['upload_path'] = "plantilla/img/uploads";
        $config['file_name'] = "imagen_Perfil_".$id_Usuario;
        $config['allowed_types'] = "jpg|png|jpeg";
        $config['max_size'] = "50000";
        $config['max_width'] = "2000";
        $config['max_height'] = "2000";

        $this->load->library('upload', $config);
        
        if (!$this->upload->do_upload($mi_archivo)) {
            //*** ocurrio un error
            $data['uploadError'] = $this->upload->display_errors();
            echo $this->upload->display_errors();
            return;
        }
        $dta=$this->upload->data();

        $this->db->where('id_Usuario', $id_Usuario)
        ->update(USERS, array("imagen_Perfil"=>$dta['file_name']));
        
        
        $query = $this->users->dregistro($email,$password);
        $data = array(
               'usuario' => $email, 
               'id' => 0, 
               'login' => true, 
               "consulta" => $query                     
         );
           // Asi se obtiene la informacion
       $this->session->set_userdata($data);
       $this->datospersonales();

    }
    //-- funcion para cargar las fotos de las bicicletas
    function foto_bici(){
        
        $email=$_SESSION["consulta"]["0"]["email"];
        $password=$_SESSION["consulta"]["0"]["password"];
        $id_Usuario=$_SESSION["consulta"]["0"]["id_Usuario"];
        $id_bici=$this->input->post('id_Bicicleta');
       
        $mi_archivo = 'mi_archivo';
        $config['upload_path'] = "plantilla/img/bicis";
        $config['file_name'] = $id_Usuario."imagen_bici_".$id_bici;
        $config['allowed_types'] = "jpg|png|jpeg";
        $config['max_size'] = "50000";
        $config['max_width'] = "2000";
        $config['max_height'] = "2000";

        $this->load->library('upload', $config);
        
        if (!$this->upload->do_upload($mi_archivo)) {
            //*** ocurrio un error
            $data['uploadError'] = $this->upload->display_errors();
            echo $this->upload->display_errors();
            return;
        }
        $dta=$this->upload->data();

        $this->db->where('id_Bicicleta', $id_bici)
               
        ->update(BICI, array("imagen_Bicicleta"=>$dta['file_name']));
        
       // die(debug($this->db->last_query()));
        $query = $this->users->dregistro($email,$password);
        $data = array(
               'usuario' => $email, 
               'id' => 0, 
               'login' => true, 
               "consulta" => $query                     
         );
           // Asi se obtiene la informacion
       $this->session->set_userdata($data);
       $this->datospersonales();

    }
    // funcion para editar las bicicletas
    function Eliminar_bici(){
        foreach ($this->input->post() as $key => $value) {
          
           $id_bici=$key;
        }
      
        $this->db->delete(BICI, array("id_Bicicleta"=>$id_bici));
        $email=$_SESSION["consulta"]["0"]["email"];
        $password=$_SESSION["consulta"]["0"]["password"];
      
        $query = $this->users->dregistro($email,$password);
        $data = array(
               'usuario' => $email, 
               'id' => 0, 
               'login' => true, 
               "consulta" => $query                     
         );
           // Asi se obtiene la informacion
       $this->session->set_userdata($data);
        echo json_encode("eliminada");


    }

    function correo_reporte($reportado, $data){
        // Varios destinatarios
        //die(debug($reportado,$data));
        $para  = $data->email; // atención a la coma
        // título
        $título = 'Reporte Usuario SearchBike';
        // mensaje
        $mensaje = '
        <html>
            <head>
                <title>Reporte Usuario SearchBike</title>
            </head>
            <body>
                <p> Hola '. $data->nombres.' '.$data->apellidos.' hemos recibido una solicitud de reporte de usuario
                  estos son los datos correspondientes  para que te poingas en contacto y soluciones el problema presentado</p>
                </p>
                <table>
                    <tr>
                        <th> Nombre :</th><th>Telefono</th>
                    </tr>
                    <tr>
                        <td>'. $reportado->nombres.' '. $reportado->apellidos.'</td><td>'.$reportado->celular.'</td>
                    </tr>
           
                </table>
            </body>
        </html>';

        // Para enviar un correo HTML, debe establecerse la cabecera Content-type
        $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
        $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        // Cabeceras adicionales
        $cabeceras .= 'From: SoporteSearchBike <SoporteSearchBike@search-bike.com>' . "\r\n";
        // Enviarlo
            mail($para, $título, $mensaje, $cabeceras);
            echo json_encode("registrado",200);
       
       
    }
    
    function reportar_user(){
       foreach ($this->input->post() as $key => $value) {
          
            $id_bici=$key;
         }

         $Q=$this->db->select("numero_Serie,ID_Usuario_bloqueado,id_Usuario")
                    ->where("id_Bicicleta",$id_bici)
                    ->get(BICI);
                  
          $q=$Q->row();

        $this->db->where("id_Bicicleta",$id_bici)
          ->update(BICI, array("reportado"=>true));

          $pru= $this->db->where('id_Usuario', $q->ID_Usuario_bloqueado)
                ->update(USERS, array("bloqueado"=>true,"reportado"=>true));
         $this->db->where('id_Usuario', $q->id_Usuario)
                ->update(USERS, array("report_envi"=>true));      

          $reportado = $this->db->select("*")
            	                ->where('id_Usuario', $q->ID_Usuario_bloqueado)
                                ->get(USERS);

        $data= $this->db->select("*")->where('id_Usuario', $q->id_Usuario)
                             ->get(USERS);

                

         $this->correo_reporte($reportado->row(), $data->row());

         if($pru){
                $email=$_SESSION["consulta"]["0"]["email"];
                $password=$_SESSION["consulta"]["0"]["password"];
            
                $query = $this->users->dregistro($email,$password);
                $data = array(
                        'usuario' => $email, 
                        'id' => 0, 
                        'login' => true, 
                        "consulta" => $query                     
                );
                    // Asi se obtiene la informacion
                $this->session->set_userdata($data);
                echo json_encode("ok");
        } else{
            echo json_encode("error");
        }
    
    }
    
    function ceder(){
        foreach ($this->input->post() as $key => $value) {
          
            $id_bici=$key;
         }
         $Q=$this->db->select("numero_Serie,ID_Usuario_bloqueado")
                    ->where("id_Bicicleta",$id_bici)
                    ->get(BICI);
          $q=$Q->row();
      
        $this->db->where("id_Bicicleta",$id_bici)->delete(BICI);
        $ce=$this->db->select("id_Bicicleta")
                   ->where("numero_Serie",$q->numero_Serie)
                   ->where("id_Usuario",$q->ID_Usuario_bloqueado)
                   ->get(BICI);
                   $ce=$ce->row();
              

            $actualizar=array(

                "ID_Usuario_bloqueado"=>null,
                "ID_Usuario_Primer"=>null

            );

            $this->db->where('id_Usuario', $q->ID_Usuario_bloqueado)
            ->update(USERS, array("bloqueado"=>null));
            
            $pru=$this->db->where('id_Bicicleta', $ce->id_Bicicleta)
            ->update(BICI,$actualizar );

         if($pru){
                $email=$_SESSION["consulta"]["0"]["email"];
                $password=$_SESSION["consulta"]["0"]["password"];
            
                $query = $this->users->dregistro($email,$password);
                $data = array(
                        'usuario' => $email, 
                        'id' => 0, 
                        'login' => true, 
                        "consulta" => $query                     
                );
                    // Asi se obtiene la informacion
                $this->session->set_userdata($data);
                echo json_encode("ok");
        } else{
            echo json_encode("error");
        }

 
    
    }

}