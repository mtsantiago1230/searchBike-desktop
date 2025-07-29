<!-- estilos -->
<style>
        .slider {
            width: 10%;
        margin: auto;
        overflow: hidden;
    }

    .slider ul {
        display: flex;
        padding: 0;
        width: 400%;
        
        animation: cambio 20s infinite alternate linear;
    }

    .slider li {
        width: 100%;
        list-style: none;
    }
    #us{
        
    width: 40%;

    }
    #us1{
        
        width: 40%;
    
        }
        #us2{
        
        width: 40%;
    
        }
        #us3{
        
        width: 40%;
    
        }


    @keyframes cambio {
        0% {margin-left: 0;}
        20% {margin-left: 0;}
        
        25% {margin-left: -100%;}
        45% {margin-left: -100%;}
        
        50% {margin-left: -200%;}
        70% {margin-left: -200%;}
        
        75% {margin-left: -300%;}
        100% {margin-left: -300%;}
    }

    #customers {
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #customers td, #customers th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #customers tr:nth-child(even){background-color: #f2f2f2;}

    #customers tr:hover {background-color: #ddd;}

    #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: center;        
        color: white;
        font-size: 20px;
    }

    .btn-clientes{
        background-color: #27909e !important;
    border: 1px solid white;
    color: white;
    }

    #contact-form-consulta{
        margin-top: 10px;
    }
</style>

<div class="row" style="padding-bottom:25px; padding-top:10px">
    <div class="col-md-12">
        <!-- declaracion de variables -->
        <?php  
        
            $usuario=$consulta["0"];
    
        ?>

        <!-- Tabla de usuario -->
        <div class="col-md-6">
            
            <!-- imagen del user -->
          

            <!-- inicio tabla -->
            <table id="customers">

                <!-- datos del usuario -->
                <tr style="background-color: #30a6bf">
                    <th colspan="2">Datos Personales</th>
                </tr>
                <tr>
                <center>
                  
                    <form id="foto"action="<?= base_url() ?>foto" method="post" enctype="multipart/form-data">
                        <a href="#" id="imguser">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pen-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M13.498.795l.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                        <h3>  Cambiar imagen</h3>
                        </svg>       
                        <?php  if($usuario["imagen_Perfil"]){ $url=$usuario["imagen_Perfil"];} else { $url='user.png';} ?>

                        <img  id="us"src="<?=  base_url().'plantilla/img/uploads/'.$url ?>" > 
                        </a>
                        <input id="imgu" type="file" name="mi_archivo" class="hidden">
                        <input id="cambiar"type="submit" value="Cambiar" class="hidden">
                    </form>
                   
          
                 </center>
                </tr>

                <!-- nombre -->
                <tr>
                    <td>Nombres: </td>
                    <td><?= $usuario['nombres']; ?></td>
                </tr>

                <!-- apellido -->
                <tr>
                    <td>Apellidos: </td>
                    <td><?= $usuario['apellidos']; ?></td>
                </tr>

                <!-- correo -->
                <tr>
                    <td>Correo: </td>
                    <td><?= $usuario['email']; ?></td>
                </tr>

                <!-- direccion -->
                <tr>
                    <td>Dirección: </td>
                    <td><?= $usuario['direccion']; ?></td>
                </tr>

                <!-- celular -->
                <tr>
                    <td>Celular: </td>
                    <td><?= $usuario['celular']; ?></td>
                </tr>

                <!-- rh -->
                <tr>
                    <td>RH: </td>
                    <td><?= $usuario['grupo_Sanguineo']; ?></td>
                </tr>

                <!-- contacto de emergencia -->
                <tr>
                    <td>Contacto de Emergencia: </td>
                    <td><?= $usuario['Nombre_Contacto_Emergencia'] ?  $usuario['Nombre_Contacto_Emergencia']:"Sin datos"; ?></td>
                </tr>
                <tr>
                    <td>Numero de Emergencia: </td>
                    <td><?= $usuario['contacto_Emergencia'] ? $usuario['contacto_Emergencia']:"Sin Datos"; ?></td>
                </tr>
                <tr>
                  
                  <td colspan="3">
                      <center>
                              
                        <button type="button" class="btn btn-clientes " data-toggle="modal" data-target="#ModalActualizar"  >
                                Actualizar Datos
                                
                        </button> 
                            
                      </center>
                  </td>
              </tr>
                
            </table>
            <!-- Fin -->
        </div>

        <?php  if( $usuario['bloqueado']!= 1) : ?>
            <!-- Tabla de Bicicleta -->
            <div class="col-md-6" style="border-left: 1px solid #f2f2f2;">
                
                <!-- imagen de la bike -->
        

                <ul class="nav nav-tabs" role="tablist">
                
                        <li role="presentation" class="active"><a href="#example4-tab1" aria-controls="example4-tab1" role="tab" data-toggle="tab">Bicicleta 1</a></li>
                
                
                        <li role="presentation" ><a href="#example4-tab2" aria-controls="example4-tab2" role="tab" data-toggle="tab">Bicicleta 2</a></li>
                
                
                        <li role="presentation" ><a href="#example4-tab3" aria-controls="example4-tab3" role="tab" data-toggle="tab">Bicicleta 3</a></li>
                
                    
                </ul>
            
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="example4-tab1">
                        <table id="example4-tab1-dt" class="table table-striped table-bordered table-condensed" cellspacing="0" width="100%">
                            <thead>
                                <tr style="background-color: #30a6bf; color:#f2f2f2">
                                    <th colspan="2">Datos Bicicleta</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <?php if(isset($consulta['0'])) : ?>
                                        <center>
                                    <form id="foto1"action="<?= base_url() ?>foto_bici" method="post" enctype="multipart/form-data">
                                    <input id=""  name="id_Bicicleta" value="<?=$consulta['0']['id_Bicicleta'] ?>"class="hidden">
        
                                        <a href="#" id="id_Bicicleta_0" class="imguser">
                                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pen-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M13.498.795l.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                                                <h3>  Cambiar imagen</h3>
                                                </svg>       
                                                <?php  if($consulta['0']['imagen_Bicicleta'] ){ $url=$consulta['0']['imagen_Bicicleta'] ;} else { $url='user.png';} ?>

                                                <img  id="us1"src="<?=  base_url().'plantilla/img/bicis/'.$url ?>" > 
                                                
                                            </a>
                                            <input id="imgu0" type="file" name="mi_archivo" class="hidden">
                                                <input id="cambiar0"type="submit" value="Cambiar" class="hidden">

                                        
                                        </form>
                                        </center>
                                    <?php endif ?>   
                                </tr>
                        
                            <tr>
                                <td>N. de Serie: </td>
                                <td><?= isset($consulta['0']['numero_Serie']) ? $consulta['0']['numero_Serie']:"Puedes registrar una nueva bicicleta" ; ?></td>
                            </tr>

                            <tr>
                                <td>Marca: </td>
                                <td><?= isset($consulta['0']['marca'])? $consulta['0']['marca']:"Puedes registrar una nueva bicicleta"; ?></td>
                            </tr>

                            <tr>
                                <td>Color: </td>
                                <td><?= isset($consulta['0']['color'])? $consulta['0']['color']:"Puedes registrar una nueva bicicleta"; ?></td>
                            </tr>

                            <tr>
                                <td>Referencia: </td>
                                <td><?= isset($consulta['0']['referencia'])? $consulta['0']['referencia']:"Puedes registrar una nueva bicicleta"; ?></td>
                            </tr>

                            <tr>
                                <td>Tipo de Bicicleta: </td>
                                <td><?= isset($consulta['0']['tipo_Bicicleta'])? $consulta['0']['tipo_Bicicleta']:"Puedes registrar una nueva bicicleta"; ?></td>
                            </tr>

                            <tr>
                                <td>Estado: </td>
                                <?php if(isset($consulta['0']['id_Estado'])): ?>
                                    <td><?= ($consulta['0']['id_Estado']== 1 ) ? "Hurtada":"Sin Novedad"; ?></td>
                                <?php else: ?>
                                    <td>Puedes registrar una nueva bicicleta</td>
                                <?php endif ?>                    
                            </tr>


                            

                            <tr>
                            
                                <td colspan="3">
                                    <div class="col-md-6">
                                        <form id="contact-form-consulta" action="<?=base_url()?>Login/reporte" class="row" method="post">
                                            <input type="hidden" name="estado[$consulta[]" value="$consulta['" class="btn btn-success"></input>
                                            <?php if(isset($consulta['0']['id_Estado'])){($consulta['0']['id_Estado']== 1 ) ? $estado="Hurtada":$estado="Sin Novedad"; if ($estado == 'Hurtada') { ?>
                                                <button style="    margin-left: 76px" type="button" class="btn btn-clientes recuperada" data-toggle="modal" data-target="#ModalReporte" tipo="recuperada" data_numero_Serie="<?=$consulta['0']['numero_Serie'] ?>" data_bici="<?=$consulta['0']['id_Bicicleta'] ?>">
                                                    Reportar como Recuperada
                                            
                                                </button> <!-- <input type="submit" id="btn-clientes" name="actualizar[<?= $id ?>]"  value="Reportar como Recuperada" class="btn btn-success"></input> -->
                                            <?php } else { ?>
                                                <button style="    margin-left: 76px" type="button" class="btn btn-clientes reporte" data-toggle="modal" data-target="#ModalReporte" tipo="robada" data_numero_Serie="<?=$consulta['0']['numero_Serie'] ?>" data_bici="<?=$consulta['0']['id_Bicicleta'] ?>">
                                                Reportar Bicicleta
                                                </button>
                                                <!-- <input type="submit" id="btn-clientes" name="actualizar[<?= $id ?>]"  value="Reportar Bicicleta" style="background-color:#cf1111" class="btn btn-success"></input> -->
                                            <?php } }else{?>
                                                <button style="    margin-left: 76px" type="button" class="btn btn-clientes" data-toggle="modal" data-target="#registrarBici">
                                                    Registrar Bicicleta
                                                </button>
                                            <?php } ?>
                                        </form>
                                        </div>
                                        <div  class="col-md-6">
                                        <?php if(isset($consulta['0']['numero_Serie'] )) { ?>
    
                                            <button style="margin-top: 10px;    margin-left: 54px;" type="button" class="btn btn-clientes Eliminar_bici" tipo="eliminar" data_numero_Serie="<?=$consulta['0']['numero_Serie'] ?>"  data_bici="<?=$consulta['0']['id_Bicicleta'] ?>">
                                                    Eliminar Bicicleta
                                            </button>
                                        <?php } ?>
                                        </div>
                                   
                                    
                                   
                                </td>
                            </tr>

                        
                            </tbody>
                        </table>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="example4-tab2">
                        <table id="example4-tab2-dt" class="table table-striped table-bordered table-condensed" cellspacing="0" width="100%">
                            
                            <thead>
                                <tr style="background-color: #30a6bf; color:#f2f2f2">
                                    <th colspan="2">Datos Bicicleta</th>
                                </tr>
                                <tr>
                                <?php if(isset($consulta['1'])) : ?>
                                <center>
                            <form id="foto2"action="<?= base_url() ?>foto_bici" method="post" enctype="multipart/form-data">
                                <input id="id_Bicicleta_1"  name="id_Bicicleta" value="<?=$consulta['1']['id_Bicicleta'] ?>"class="hidden">
            
                                <a href="#" id="id_Bicicleta_1" class="imguser">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pen-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M13.498.795l.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                                    <h3>  Cambiar imagen</h3>
                                    </svg>       
                                    <?php  if($consulta['1']['imagen_Bicicleta']){ $url=$consulta['1']['imagen_Bicicleta'];} else { $url='user.png';} ?>

                                    <img  id="us2"src="<?=  base_url().'plantilla/img/bicis/'.$url ?>" > 
                                    </a>
                                    <input id="imgu1" type="file" name="mi_archivo" class="hidden">
                                    <input id="cambiar1"type="submit" value="Cambiar" class="hidden">


                                </form>
                                </center>
                                <?php endif ?>     
                        </tr>
                            </thead> 
                            <tbody>
                        

                            <tr>
                                <td>N. de Serie: </td>
                                <td><?= isset($consulta['1']['numero_Serie']) ? $consulta['1']['numero_Serie']:"Puedes registrar una nueva bicicleta" ; ?></td>
                            </tr>

                            <tr>
                                <td>Marca: </td>
                                <td><?= isset($consulta['1']['marca'])? $consulta['1']['marca']:"Puedes registrar una nueva bicicleta"; ?></td>
                            </tr>

                            <tr>
                                <td>Color: </td>
                                <td><?= isset($consulta['1']['color'])? $consulta['1']['color']:"Puedes registrar una nueva bicicleta"; ?></td>
                            </tr>

                            <tr>
                                <td>Referencia: </td>
                                <td><?= isset($consulta['1']['referencia'])? $consulta['1']['referencia']:"Puedes registrar una nueva bicicleta"; ?></td>
                            </tr>

                            <tr>
                                <td>Tipo de Bicicleta: </td>
                                <td><?= isset($consulta['1']['tipo_Bicicleta'])? $consulta['1']['tipo_Bicicleta']:"Puedes registrar una nueva bicicleta"; ?></td>
                            </tr>


                            <tr>
                                <td>Estado: </td>
                                <?php if(isset($consulta['1']['id_Estado'])): ?>
                                    <td><?= ($consulta['1']['id_Estado']== 1 ) ? "Hurtada":"Sin Novedad"; ?></td>
                                <?php else: ?>
                                    <td>Puedes registrar una nueva bicicleta</td>
                                <?php endif ?> 
                            
                            </tr>

                            <tr>
                            
                                <td colspan="3">
                                    <center>
                                    <div class="col-md-6">
                                        <form id="contact-form-consulta" action="<?=base_url()?>Login/reporte" class="row" method="post">
                                            <input type="hidden" name="estado[$consulta[']" value="$consulta['" class="btn btn-success"></input>
                                            <?php if(isset($consulta['1']['id_Estado'])){($consulta['1']['id_Estado']== 1 ) ? $estado="Hurtada":$estado="Sin Novedad"; if ($estado == 'Hurtada') { ?>
                                                <button type="button" class="btn btn-clientes recuperada" data-toggle="modal" data-target="#ModalReporte" tipo="recuperada" data_numero_Serie="<?=$consulta['1']['numero_Serie'] ?>" data_bici="<?=$consulta['1']['id_Bicicleta'] ?>">
                                                Reportar como Recuperada
                                            
                                                </button> <!-- <input type="submit" id="btn-clientes" name="actualizar[<?= $id ?>]"  value="Reportar como Recuperada" class="btn btn-success"></input> -->
                                            <?php } else { ?>
                                                <button style="    margin-left: 76px" type="button" class="btn btn-clientes reporte" data-toggle="modal" data-target="#ModalReporte" tipo="robada" data_numero_Serie="<?=$consulta['1']['numero_Serie'] ?>" data_bici="<?=$consulta['1']['id_Bicicleta'] ?>">
                                                Reportar Bicicleta
                                                </button>
                                                <!-- <input type="submit" id="btn-clientes" name="actualizar[<?= $id ?>]"  value="Reportar Bicicleta" style="background-color:#cf1111" class="btn btn-success"></input> -->
                                            <?php } }else{?>
                                                <button style="    margin-left: 76px" type="button" class="btn btn-clientes" data-toggle="modal" data-target="#registrarBici">
                                                    Registrar Bicicleta
                                                </button>
                                            <?php } ?>
                                        </form>
                                        </div>
                                        <div class="col-md-6">
                                        <?php if(isset($consulta['1']['numero_Serie'] )) { ?>
                                        <button type="button" style="margin-top: 10px;    margin-left: 54px;" class="btn btn-clientes Eliminar_bici"  tipo="eliminar" data_numero_Serie="<?=$consulta['1']['numero_Serie'] ?>"  data_bici="<?=$consulta['1']['id_Bicicleta'] ?>">
                                                   Eliminar Bicicleta
                                        </button>
                                        <?php } ?>
                                        </div>
                                   
                                    </center>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="example4-tab3">
                        <table id="example4-tab3-dt" class="table table-striped table-bordered table-condensed" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                            <?php if(isset($consulta['2'])) : ?>
                                <center>
                            <form id="foto3"action="<?= base_url() ?>foto_bici" method="post" enctype="multipart/form-data">
                            <input id="id_Bicicleta2"  name="id_Bicicleta" value="<?=$consulta['2']['id_Bicicleta'] ?>"class="hidden">
    
                                <a href="#" id="id_Bicicleta_2" class="imguser">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pen-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M13.498.795l.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                                        <h3>  Cambiar imagen</h3>
                                        </svg>       
                                        <?php  if($consulta['2']['imagen_Bicicleta']){ $url=$consulta['2']['imagen_Bicicleta'];} else { $url='user.png';} ?>

                                        <img  id="us3"src="<?=  base_url().'plantilla/img/bicis/'.$url ?>" > 

                                    </a>
                                    <input id="imgu2" type="file" name="mi_archivo" class="hidden">
                                        <input id="cambiar2"type="submit" value="Cambiar" class="hidden">


                                </form>
                                </center>
                                <?php endif ?>     
                        </tr>
                                <tr style="background-color: #30a6bf; color:#f2f2f2">
                                    <th colspan="2">Datos Bicicleta</th>
                                </tr>
                            </thead> 
                            <tbody>
                        

                            <tr>
                                <td>N. de Serie: </td>
                                <td><?= isset($consulta['2']['numero_Serie']) ? $consulta['2']['numero_Serie']:"Puedes registrar una nueva bicicleta" ; ?></td>
                            </tr>

                            <tr>
                                <td>Marca: </td>
                                <td><?= isset($consulta['2']['marca'])? $consulta['2']['marca']:"Puedes registrar una nueva bicicleta"; ?></td>
                            </tr>

                            <tr>
                                <td>Color: </td>
                                <td><?= isset($consulta['2']['color'])? $consulta['2']['color']:"Puedes registrar una nueva bicicleta"; ?></td>
                            </tr>

                            <tr>
                                <td>Referencia: </td>
                                <td><?= isset($consulta['2']['referencia'])? $consulta['2']['referencia']:"Puedes registrar una nueva bicicleta"; ?></td>
                            </tr>

                            <tr>
                                <td>Tipo de Bicicleta: </td>
                                <td><?= isset($consulta['2']['tipo_Bicicleta'])? $consulta['2']['tipo_Bicicleta']:"Puedes registrar una nueva bicicleta"; ?></td>
                            </tr>
                            <tr>
                                <td>Estado: </td>
                                <?php if(isset($consulta['2']['id_Estado'])): ?>
                                    <td><?= ($consulta['2']['id_Estado']== 1 ) ? "Hurtada":"Sin Novedad"; ?></td>
                                <?php else: ?>
                                    <td>Puedes registrar una nueva bicicleta</td>
                                <?php endif ?> 
                            </tr>

                            <tr>
                            
                                <td colspan="3">
                                    <center>
                                        <div class="col-md-6">
                                        <form id="contact-form-consulta" action="<?=base_url()?>Login/reporte" class="row" method="post">
                                            <input type="hidden" name="estado[$consulta[']" value="$consulta['" class="btn btn-success"></input>
                                            <?php if(isset($consulta['2']['id_Estado'])){($consulta['2']['id_Estado']== 1 ) ? $estado="Hurtada":$estado="Sin Novedad"; if ($estado == 'Hurtada') { ?>
                                                <button style="    margin-left: 76px" type="button" class="btn btn-clientes recuperada" data-toggle="modal" data-target="#ModalReporte" tipo="recuperada" data_numero_Serie="<?=$consulta['2']['numero_Serie'] ?>"  data_bici="<?=$consulta['2']['id_Bicicleta'] ?>">
                                                    Reportar como Recuperada
                                            
                                                </button> <!-- <input type="submit" id="btn-clientes" name="actualizar[<?= $id ?>]"  value="Reportar como Recuperada" class="btn btn-success"></input> -->
                                            <?php } else { ?>
                                                <button style="    margin-left: 76px" type="button" class="btn btn-clientes reporte" data-toggle="modal" data-target="#ModalReporte" tipo="robada" data_numero_Serie="<?=$consulta['2']['numero_Serie'] ?>" data_bici="<?=$consulta['2']['id_Bicicleta'] ?>">
                                                    Reportar Bicicleta
                                                </button>
                                                <!-- <input type="submit" id="btn-clientes" name="actualizar[<?= $id ?>]"  value="Reportar Bicicleta" style="background-color:#cf1111" class="btn btn-success"></input> -->
                                            <?php } }else{?>
                                                <button type="button" class="btn btn-clientes" data-toggle="modal" data-target="#registrarBici">
                                                    Registrar Bicicleta
                                                </button>
                                            <?php } ?>
                                        </form>
                                        </div>
                                    <div class="col-md-6">
                                    <?php if(isset($consulta['2']['numero_Serie'] )) { ?>
                                        <button type="button" style="margin-top: 10px;    margin-left: 54px;" class="btn btn-clientes Eliminar_bici"  tipo="eliminar" data_numero_Serie="<?=$consulta['2']['numero_Serie'] ?>"  data_bici="<?=$consulta['2']['id_Bicicleta'] ?>">
                                                   Eliminar Bicicleta
                                        </button>
                                        <?php } ?>
                                    </div>

                                    </center>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
            <?php  if( $usuario['report_envi']!= 1) : ?>
            
                <?php  if(isset($consulta['0']['ID_Usuario_bloqueado'])) : ?>
                    <div class="col-md-4">
                        <p> ¿Una Persona ha Intentado Registrar Esta bicicleta con el mismo número de serie deseas Ceder la propiedad o reportarlo? </p>
                        <?php  if($consulta['0']['imagen_Bicicleta']){ $url=$consulta['0']['imagen_Bicicleta'];} else { $url='user.png';} ?>
                        <img  id="us3"src="<?=  base_url().'plantilla/img/bicis/'.$url ?>" > 
                        <button type="button" class="btn btn-clientes ceder" id_bici="<?= isset($consulta['0']['id_Bicicleta'])? $consulta['0']['id_Bicicleta']: "" ?>" >
                            ceder propiedad.
                        </button>
                        <button type="button" class="btn btn-clientes reportar_user" id_bici="<?= isset($consulta['0']['id_Bicicleta'])? $consulta['0']['id_Bicicleta']: "" ?>"   >
                            Reportar Usuario.
                        </button>
                  
                    </div>
                <?php endif ?> 
                <?php  if(isset($consulta['1']['ID_Usuario_bloqueado'])) : ?>
                    <div class="col-md-4">
                        <p> ¿Una Persona ha Intentado Registrar Esta bicicleta con el mismo número de serie deseas Ceder la propiedad o reportarlo? </p>
                        <?php  if($consulta['1']['imagen_Bicicleta']){ $url=$consulta['1']['imagen_Bicicleta'];} else { $url='user.png';} ?>
                    
                        <img  id="us3"src="<?=  base_url().'plantilla/img/bicis/'.$url ?>" > 
                        <button type="button" class="btn btn-clientes ceder" id_bici="<?= isset($consulta['1']['id_Bicicleta']) ? $consulta['1']['id_Bicicleta']: "" ?>" >
                            ceder propiedad.
                        </button>
                        <button type="button" class="btn btn-clientes reportar_user" id_bici="<?= isset($consulta['1']['id_Bicicleta'])? $consulta['1']['id_Bicicleta']: "" ?>" >
                            Reportar Usuario.
                        </button>

                    </div>
                <?php endif ?> 
                <?php  if(isset($consulta['2']['ID_Usuario_bloqueado'])) : ?>
                    <div class="col-md-4">
                        <p> ¿Una Persona ha Intentado Registrar Esta bicicleta con el mismo número de serie deseas Ceder la propiedad o reportarlo? </p>
                        <?php  if($consulta['2']['imagen_Bicicleta']){ $url=$consulta['2']['imagen_Bicicleta'];} else { $url='user.png';} ?>
                        <img  id="us3"src="<?=  base_url().'plantilla/img/bicis/'.$url ?>" > 
                        <button type="button" class="btn btn-clientes ceder" id_bici="<?= isset($consulta['2']['id_Bicicleta'])? $consulta['2']['id_Bicicleta']: "" ?>"  >
                            ceder propiedad.
                        </button>
                        <button type="button" class="btn btn-clientes reportar_user"id_bici="<?= isset($consulta['2']['id_Bicicleta'])? $consulta['2']['id_Bicicleta']: "" ?>"  >
                            Reportar Usuario.
                        </button>
                    </div>
                <?php endif ?> 
            <?php endif ?> 

        <?php  else : ?>
                    <div class="col-md-6" style="border-left: 1px solid #f2f2f2;">
                        <h2>Parece que una o más de tus bicicletas ya se encontraban registradas la información será verificada por nuestro equipo de trabajo</h2>
                    </div>
        <?php endif ?> 

        </div>
        <!-- Modal -->
        <div class="modal fade" data-backdrop="static" data-keyboard="false" id="ModalActualizar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header" style="background-color: #30a6bf; color:#f2f2f2">
                    <h2 class="modal-title" id="exampleModalLongTitle" >Actualiza tus Datos</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="registro_bici" action="<?=base_url()?>Login/Actualizar" class="row" method="post">
                        <div id="contenedor_bici" class="">
                            <input type="text" id="id" name="id_Usuario" value="<?=  $usuario['id_Usuario']  ?>"class="form-control hidden" data-animate="bounceIn" > 
                            
                            <!-- Marca -->
                            <div class="col-md-12">
                                <b>Nombres</b>
                                <input type="text"  name="nombres" value="<?= $usuario['nombres']; ?>"class="form-control " data-animate="bounceIn" required="" required=""> 
                            </div>
                            <!-- Referencia -->
                            <div class="col-md-12">
                                <b>Apellidos</b>
                                <input type="text"  name="apellidos" value="<?= $usuario['apellidos']; ?>"class="form-control " data-animate="bounceIn" required="" > 
                            </div>
                            <!-- Número de Serie -->
                            <div class="col-md-12">
                                <b>Correo </b>
                                <input type="text"  name="email" value="<?= $usuario['email']; ?>"class="form-control " data-animate="bounceIn" required="" > 
                            </div>
                            <!-- Color -->
                            <div class="col-md-12">
                                <b>Dirección </b>
                                <input type="text"  name="direccion" value="<?= $usuario['direccion']; ?>"class="form-control " data-animate="bounceIn"  required=""> 
                            </div>
                            <!-- Tipo de Bici -->
                            <div class="col-md-12">
                                <b>Teléfono</b>
                                <input type="text" name="celular" value="<?= $usuario['celular']; ?>"class="form-control " data-animate="bounceIn" required="" > 
                            </div>

                            <div class="col-md-12">
                                <b>Grupo Sanguíneo </b>
                                <input type="text"  name="grupo_Sanguineo" value="<?= $usuario['grupo_Sanguineo']; ?>"class="form-control " data-animate="bounceIn" required="" > 
                            </div>

                            <div class="col-md-12">
                                <b>Nombre Contacto de Emergencia</b>
                                <input type="text"  name="Nombre_Contacto_Emergencia" value="<?= $usuario['Nombre_Contacto_Emergencia']; ?>"class="form-control " data-animate="bounceIn" required="" > 
                            </div>

                            <div class="col-md-12">
                                <b>Número de Teléfono Contacto de Emergencia</b>
                                <input type="text"  name="contacto_Emergencia" value="<?= $usuario['contacto_Emergencia']? $usuario['contacto_Emergencia']:"Sin Datos"; ?>"class="form-control " data-animate="bounceIn" required="" > 
                            
                            </div> 
                            <div class="col-md-12">
                                <b>Password</b>
                                <input type="text"  name="password" value="<?=  $usuario['password']  ?>"class="form-control " data-animate="bounceIn"  required=""> 
                            </div>
                        </div>
                        <br><br>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal" style="margin-top: 15px;">Cancelar</button>
                            <button type="submit" class="btn btn-primary" style="margin-top: 15px;">Actualizar Datos</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

         
    </div>  
</div>


<!-- Modal -->
<div class="modal fade" id="ModalReporte" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="height: 50%;width: 51%;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Reporte de bicicleta</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" >
                <form id="" action="<?=base_url()?>Login/reporte" class="row" method="post">
                    <div class=" contact-form  modal-body">
                        <div id="reportes"class="row" style="margin-right: 2px;margin-left: 8px;">
                            <input type="text" id="id"                  name="id_Usuario"   value="<?=  $usuario['id_Usuario']  ?>"class="form-control hidden " data-animate="bounceIn"  > 
                            <input type="text" id="email"               name="email"        value="<?=  $usuario['email']  ?>"class="form-control  hidden" data-animate="bounceIn"  > 
                            <input type="text" id="password"            name="password"     value="<?=  $usuario['password']  ?>"class="form-control  hidden" data-animate="bounceIn"  > 
                            <label for="">Estado Para el Reporte</label>
                            <input  disabled type="text" id="Hurto_o_Recuperada"  name="Hurto_o_Recuperada" value=""class="form-control " data-animate="bounceIn"  > 
                            <input   type="text" id="Hurto"  name="Hurto_o_Recuperada" value=""class="form-control hidden " data-animate="bounceIn"  > 

                            <label for="">fecha del hurto o recuperacion</label>
                            <input type="date" id="fecha_Hurto_o_Recuperacion"class="form-control" name="fecha_Hurto_o_Recuperacion"  required="" >

                            <label for="">Descripcion del reporte</label>
                            <textarea  id="descripcion_reporte"  name="descripcion"  class="form-control " data-animate="bounceIn" required="" > </textarea>
                            <label for="">Numero de serie de la Bicicleta</label>
                            <input disabled type="text" id="numero_Serie_reporte"        name="numero_Serie" class="form-control " data-animate="bounceIn"  > 
                            <input  type="text" id="Serie_reporte"        name="numero_Serie" class="form-control hidden" data-animate="bounceIn"  > 

                            <label for="">lugar Del Hurto o Recuperación</label>
                            <select  id="RegTipoB" name="Lugar" class="form-control triggerAnimation animated undefined visible" >
                                <option value="Antonio Nariño"> Antonio Nariño</option>
                                <option value=" Barrios Unidos"> Barrios Unidos</option>
                                <option value="Bosa">Bosa</option>
                                <option value="Chapinero">Chapinero</option>
                                <option value="Ciudad Bolívar">Ciudad Bolívar</option>
                                <option value="Engativá">Engativá</option>
                                <option value="Fontibón">Fontibón</option>
                                <option value="Kennedy">Kennedy</option>
                                <option value="Candelaria">Candelaria</option>
                                <option value="Mártires">Mártires</option>
                                <option value=" Puente Aranda"> Puente Aranda</option>
                                <option value="Rafael Uribe Uribe">Rafael Uribe Uribe</option>
                                <option value="  San Cristóbal">  San Cristóbal</option>
                                <option value=" Santa Fe"> Santa Fe</option>
                                <option value="Suba">Suba</option>
                                <option value="Sumapaz">Sumapaz</option>
                                <option value="Teusaquillo">Teusaquillo</option>
                                <option value="Tunjuelito">Tunjuelito</option>
                                <option value="Usaquén">Usaquén</option>
                                <option value="Usme">Usme</option>

                            </select>
                            <br>
                            <input type="text" id="id_Bicicleta_reporte" name="id_Bicicleta" class="form-control hidden" data-animate="bounceIn"  > 

                           
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Enviar Reporte</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="registrarBici" tabindex="-1"  data-backdrop="static" data-keyboard="false"role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header" style="background-color: #30a6bf; color:#f2f2f2">
            <h2 class="modal-title" id="exampleModalLongTitle" >Registrar Bicicleta</h2>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form id="registro_bici" action="<?=base_url()?>Login/registrarbici" class="row" method="post">
                <div id="contenedor_bici" class="">
                    <input type="text" id="id" name="id_Usuario" value="<?=  $usuario['id_Usuario']  ?>"class="form-control hidden" data-animate="bounceIn"  > 
                    <input type="text" id="id" name="email" value="<?=  $usuario['email']  ?>"class="form-control hidden" data-animate="bounceIn"  > 
                    <input type="text" id="id" name="password" value="<?=  $usuario['password']  ?>"class="form-control hidden" data-animate="bounceIn"  > 

                    <!-- Marca -->
                    <div class="col-md-12">
                        <b>Marca</b>
                        <input type="text" name="marca"id="RegMarca" class="form-control triggerAnimation animated undefined visible" data-animate="bounceIn" placeholder="Marca" > 
                    </div>
                    <!-- Referencia -->
                    <div class="col-md-12">
                        <b>Referencia</b>
                        <input type="text"name='referencia' id="RegReferencia" class="form-control triggerAnimation animated undefined visible" data-animate="bounceIn" placeholder="Referencia" > 
                    </div>
                    <!-- Número de Serie -->
                    <div class="col-md-12">
                        <b>Número de Serie</b>
                        <input type="text" name='numero_Serie' id="RegNumeroSerie" class="form-control triggerAnimation animated undefined visible" data-animate="bounceIn" placeholder="Número de Serie" required=""> 
                    </div>
                    <!-- Color -->
                    <div class="col-md-12">
                        <b>Color</b>
                        <input type="text"name='color' id="RegColor" class="form-control triggerAnimation animated undefined visible" data-animate="bounceIn" placeholder="Color" required="" > 
                    </div>
                    <!-- Tipo de Bici -->
                    <div class="col-md-12">
                        <b>Tipo de Bici</b>
                        <select  id="RegTipoB" name='tipo_Bicicleta' class="form-control triggerAnimation animated undefined visible">
                            <option value="All Mountain">All Mountain</option>
                            <option value="BMX">BMX</option>
                            <option value="Choper">Choper</option>
                            <option value="Cross Country">Cross Country</option>
                            <option value="Cruiser">Cruiser</option>
                            <option value="Cargo/ Bike">Cargo/ Bike</option>
                            <option value="Down Hill">Down Hill</option>
                            <option value="Electrica">Electrica</option>
                            <option value="Fat Bike">Fat Bike</option>
                            <option value="Fixie">Fixie</option>
                            <option value="MTB">MTB</option>
                            <option value="Plegable">Plegable</option>
                            <option value="Reclinada/Adaptada">Reclinada/Adaptada</option>
                            <option value="Ruta">Ruta</option>
                            <option value="Tandem">Tandem</option>
                            <option value="Triathlon">Triathlon</option>
                            <option value="Turismo/Treking">Turismo/Treking</option>
                            <option value="Urbana">Urbana</option>
                        </select>
                    </div>
                    <!-- estado bici -->
                    <div class="col-md-12">
                        <b>Estado de la bici</b>
                        <select  id="RegEstado"name='id_Estado' required="" class="form-control triggerAnimation animated undefined visible">
                                <option value="0">Sin novedad</option>
                              
                        </select>
                    </div>
                                <!-- imagen serial bici -->
                            
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="margin-top: 15px;">Cancelar</button>
                        <button type="submit" class="btn btn-primary" style="margin-top: 15px;">Registrar Bicicleta</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


