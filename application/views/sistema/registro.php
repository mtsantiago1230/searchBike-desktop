<style>
    .botones{
        margin-top: 15px;
        margin-left: 20px;
        min-width: 170px;
    }


</style>


<!-- Formulario -->
	<section id="contact" style="padding-bottom: 141px; background-image: url(<?= base_url() ?>plantilla/img/parallax_bg/registro.png);">
		
		<div class="container">	
			
			<!-- SECTION TITLE -->				
			<div class="row">
				<div class="col-sm-12 titlebar" >
					<h2>Registrate</h2>
					<h3>Search Bike</h3>
				</div>
			</div>
				
			<!-- Formulario de User -->
			<div class="row">
                <div class="alert alert-success alert-dismissible hidden Exitoso" id="Exitoso">
                    <a href="#" class="close"  aria-label="close">&times;</a>
                    <strong>Registro Exitoso!</strong> 
                </div> 
                <div class="alert alert-danger alert-dismissible hidden registrado" id="registrado">
                    <a href="#" class="close"  aria-label="close">&times;</a>
                    <strong>!Upss! El correo Ya a sido Registrado</strong> 
                </div>
                 
			
				<div class="col-sm-12">
                    <h2 style="color:white">- Registro de Usuario</h2>
                    <?= form_open( "login/registro","id='contact-form',enctype='multipart/form-data'")  ?>
				
						<div class="col-md-12">
                            <!-- Nombres -->
                            <div class="col-md-3">
                                <b>Nombres</b>
                                <input type="text" name="RegNombre" class="form-control triggerAnimation animated undefined visible" data-animate="bounceIn" placeholder="Tus nombres" required=""> 
                            </div>
                                
                            <!-- Apellidos -->
                            <div class="col-md-3">
                                <b>Apellidos</b>
                                <input type="text" name="RegApellido" class="form-control triggerAnimation animated undefined visible" data-animate="bounceIn" placeholder="Tus Apellidos" required=""> 
                            </div>
                                
                            <!-- Tipo CC -->
                            <div class="col-md-3">
                                <b>Tipo de Documento</b>
                                <select id="" name="RegTipoDoc" required="" class="form-control triggerAnimation animated undefined visible">
                                    <option>Tipo de Documento</option>
                                    <option value="CC">CC</option>
                                    <option value="CE">CE</option>
                                    <option value="NIT">NIT</option>
                                </select>
                            </div>

                            <!-- Numero de CC -->
                            <div class="col-md-3">
                                <b>Numero del Documento</b>
                                <input type="text" name="RegCC" class="form-control triggerAnimation animated undefined visible" data-animate="bounceIn" placeholder="N. Cedula" required=""> 
                            </div>

                            <!-- Genero  -->
                            <div class="col-md-3">
                                <b>Genero</b>
                                <select id="" name="RegGenero" required="" class="form-control triggerAnimation animated undefined visible">
                                    <option>Genero</option>
                                    <option value="Masculino">Masculino</option>
                                    <option value="Femenino">Femenino</option>
                                </select>
                            </div>

                            <!--Fecha de Nacimiento  -->
                            <div class="col-md-3">
                                <b>Fecha de Nacimiento</b>
                                <?php
                                    $fechaactual = date('d-m-Y'); // 2016-12-29
                                    $nuevafecha = strtotime ('-19 year' , strtotime($fechaactual)); //Se añade un año mas
                                    $nuevafecha = date ('Y-m-d',$nuevafecha);

                                
                                ?>
                                <input type="date" class="form-control" name="RegFechaN"  value="<?= $nuevafecha?>" >
                                
                            </div>

                            <!-- Ciudad -->
                            <div class="col-md-3">
                                <b>Ciudad</b>
                                <select id="" name="RegCiudad" required="" class="form-control triggerAnimation animated undefined visible">
                                    <option selected="">Ciudad</option>
                                    <option value="Bogota">Bogotá Dc</option>
                                </select>
                            </div>
                                    
                            <!-- Estrato -->
                            <div class="col-md-3">
                                <b>Estrato</b>
                                <select id="" name="RegEstrato" required="" class="form-control triggerAnimation animated undefined visible">
                                    <option selected="">Estrato</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </div>

                            <!-- Direccion de Domicilio -->
                            <div class="col-md-3">
                                <b>Direccion de Domicilio</b>
                                <input type="text" name="RegDireccion" class="form-control triggerAnimation animated undefined visible" data-animate="bounceIn" placeholder="Dirección de Domicilio" required=""> 
                            </div>
                                
                            <!-- Celular -->
                            <div class="col-md-3">
                                <b>Teléfono</b>
                                <input type="text" name="RegCelular" class="form-control triggerAnimation animated undefined visible" data-animate="bounceIn" placeholder="Numero de Celular" required=""> 
                            </div>
                                
                            <!-- Email -->
                            <div class="col-md-3">
                                <b>Email</b>
                                <input type="email" name="RegEmail" class="form-control triggerAnimation animated undefined visible" data-animate="bounceIn" placeholder="Email" required=""> 
                            </div>

                            <!-- Email -->
                            <div class="col-md-3">
                                <b>Password</b>
                                <!-- Password field -->
                               <input type="password" class="form-control triggerAnimation animated undefined visible" data-animate="bounceIn"  required="" pattern=".{6,}" name="password" id="myInput">

                                <!-- An element to toggle between password visibility -->
                                <input type="checkbox" onclick="myFunction()">Ver Password
                               
                            </div>
                                
                            <!-- Interes -->
                            <div class="col-md-3">
                                <b>Interes</b>
                                <select id="" name="RegInteres" required="" class="form-control triggerAnimation animated undefined visible">
                                
                                    <option value="BMX">BMX</option>
                                    <option value="Fixie">Fixie</option>
                                    <option value="MTB">MTB</option>
                                    <option value="Triathlon">Triathlon</option>
                                    <option value="Turismo">Turismo</option> 
                                    <option value="Urbano">Urbano</option>
                                </select>
                            </div>
                                
                            <!-- Grupo Sanguineo -->
                            <div class="col-md-3">
                            <b>Grupo Sanguineo</b>
                                <select id="" name="RegGrupoS" required="" class="form-control triggerAnimation animated undefined visible">
                                    <option selected="">Grupo Sanguineo</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="AB">AB</option>
                                    <option value="AB-">AB-</option>
                                </select>
                            </div>
                            
                            <!-- Contacto de Emergencia -->
                            <div class="col-md-3">
                                <b>Nombre Contacto de Emergencia</b>
                                <input type="text" name="NomContactoE" class="form-control triggerAnimation animated undefined visible" data-animate="bounceIn" placeholder="Nombre contacto Emergencia" required=""> 
                            </div>	
                            <!-- Contacto de Emergencia -->
                            <div class="col-md-3">
                                <b>Contacto de Emergencia</b>
                                <input type="text" name="RegContactoE" class="form-control triggerAnimation animated undefined visible" data-animate="bounceIn" placeholder="Contacto de Emergencia" required=""> 
                            </div>	
                            		  
						 				  
                        </div>
                        <!-- cont6enedor de bicicletas -->
                        <div class="col-md-12" id="bici">
                            <h2 style="color:white">- Registra tu Bici
                                <div>
                                   
                                    <button type="button" class="btn btn-primary  btn-lg  agregar botones">Agregar bici</button>
                                  
                               

                                </div>
                            </h2>	

                        </div>
                      
                        <!-- Submit Button -->
                        <div class="col-md-12" style="padding-top:50px">							
							<div class="text-center">
								<input id="btn-act" type="submit" value="Registrate" class="btn btn-theme triggerAnimation animated undefined visible" data-animate="bounceIn" style="font-size: 20px;">
							</div>  
						</div>
							

                    <?= form_close() ?>

                    <div id="contenedor_bici" class="hidden">
                        <div class="col-md-12 bicicleta_" >
                            <h3 id="numero_bici"> </h3>
                            <!-- Marca -->
                            <div class="col-md-3">
                                <b>Marca</b>
                                <input type="text" id="RegMarca" class="form-control triggerAnimation animated undefined visible" data-animate="bounceIn" placeholder="Marca" > 
                            </div>
                            <!-- Referencia -->
                            <div class="col-md-3">
                                <b>Referencia</b>
                                <input type="text" id="RegReferencia" class="form-control triggerAnimation animated undefined visible" data-animate="bounceIn" placeholder="Referencia" > 
                            </div>
                            <!-- Número de Serie -->
                            <div class="col-md-3">
                                <b>Número de Serie</b>
                                <input type="text" id="RegNumeroSerie" class="form-control triggerAnimation animated undefined visible" data-animate="bounceIn" placeholder="Número de Serie" required=""> 
                            </div>
                            <!-- Color -->
                            <div class="col-md-3">
                                <b>Color</b>
                                <input type="text" id="RegColor" class="form-control triggerAnimation animated undefined visible" data-animate="bounceIn" placeholder="Color" > 
                            </div>
                            <!-- Tipo de Bici -->
                            <div class="col-md-3">
                                <b>Tipo de Bici</b>
                                <select  id="RegTipoB"  class="form-control triggerAnimation animated undefined visible">
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
                            <div class="col-md-3">
                                <b>Estado de la bici</b>
                                <select  id="RegEstado" required="" class="form-control triggerAnimation animated undefined visible">
                                        <option value="0">Sin novedad</option>
                                </select>
                            </div>
                            <!-- imagen serial bici -->
                         
                            <div class="col-md-12 text-center">
                            <div class="demo-checkbox">
                              
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in" required="" >
                                <a style="font-size:20px" data-toggle="modal" data-target="#exampleModalCenter"  class="btn triggerAnimation animated undefined visible">Autorizo el tratamiento de datos y acepto la declaración juramentada de pertenencia.</a>
                             
                            </div>
                                <button type="button" class="btn btn-danger btn-lg eliminar botones hidden">Eliminar bici</button>
                            </div>
                        </div>
                    </div>

                </div>

			</div>
            <button class=" hidden" id="btn">Toggle</button>
	 
			<!-- Fin -->	


				
		</div>	   
		<!-- End container -->	

	</section>	 
	<!-- Fin -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header"style="background-color: #27909e !important;color: white;">
        <h4 class="modal-title" id="exampleModalLongTitle">AUTORIZACIÓN TRATAMIENTO DE DATOS</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div>
            <h5>AUTORIZACIONES EXPRESAS HABEAS DATA</h5> 
            <p>En cuanto a datos personales, 
            el usuario autoriza de manera previa e informada a Search Bike como 
            responsables del tratamiento de datos, salvo que expresamente se mencione 
            lo contrario, para realizar el manejo de información personal lo que incluye 
            Almacenar, consultar, procesar, obtener, actualizar, compilar, tratar, emplear, 
            utilizar, eliminar, suministrar, y conservar la información.</p>
        </div>
        <h5>DECLARACION JURAMENTADA DE PERTENENCIA</h5>
        <div>
        <p> El usuario manifiesta libre y voluntariamente que ejerzo la sana posesión pública, 
            pacífica e ininterrumpida de la(s) bicicleta(s) que se están registrando dentro del 
            aplicativo Search Bike. y declara bajo gravedad de juramento que no existe otro distinto 
            poseedor en las mismas circunstancias de tiempo modo y lugar conforme a lo contenido en 
            el código civil y demás normas concordantes. Adicionalmente el usuario declara bajo la 
            gravedad de juramento que toda la información aquí suministrada es VERÍDICA. Autoriza que 
            por cualquier medio se verifiquen los datos aquí contenidos y en caso de falsedad, que se 
            apliquen las sanciones contempladas en la ley.</p>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
       
      </div>
    </div>
  </div>
</div>