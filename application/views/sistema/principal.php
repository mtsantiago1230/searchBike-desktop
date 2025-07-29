		  
<style>
	.imagen1 {
	background-image:url("/SearchBike/plantilla/img/reportes/bici-reportes.jpg");
	padding-top: 40px;
	padding-bottom: 56px;
	} 
	.CrearUsuario{
		padding-top: 40px;
	padding-bottom: 56px;
	}
	.intro_text{
		color: #f5f5f5;
	}
	#animIt10{
		padding-top: 40px;
	padding-bottom: 56px;
	}
</style>
	<!-- INTRO inicio		============================================= -->
		<section  class="imagen1" style=" padding-top: 86px;" >
			<div class="container">
				<div class="row">
					<!-- INTRO TEXT -->
					<div class="col-md-7">
						<div class="intro_text" >
							<h2>Registra Tu Bici Ahora</h2>
							<h3>Aqui podras registrar y consultar el estado de legal de una bicicleta.</h3>
							<p>Este Registro permite asociar los datos personales de los ciudadanos con los de su bicicleta.
								este instrumento le facilita a los ciclistas demostrar la propiedad de su vehículo ante un posible hurto.
								El registro es gratuito.
							</p>
							<h4>Estos Son algunos de los beneficios conlosque podras contar.</h4>
							<ul class="bullets" style="font-family: Raleway, sans-serif ">
								<li>
									<span class="glyphicon glyphicon-record intro_text" ></span>
									El registro es gratuito.
							
								</li>
								<li>
									<span class="glyphicon glyphicon-record intro_text" ></span> 
									Podras Consultar el estado de una bicicleta.
							
								</li>
								<li>
									<span class="glyphicon glyphicon-record intro_text" ></span> 
									Gestion de tus datos y los de tu bicicleta. 
							
								</li>
								<li>
									<span class="glyphicon glyphicon-record intro_text" ></span> 
									Generacion de informes por medio de mapas de las zonas mas inseguras. 
							
								</li>
								<li>
									<span class="glyphicon glyphicon-record intro_text" ></span> 
										Actualizar el estado legal de tu bicicleta
							
								</li>
							</ul>
						</div>
						<!-- INTRO BUTTONS -->
						<div class="intro_buttons">
							<a class="btn btn-theme" href="
								<?= base_url() ?>registro">Regístrate 
							</a>
					
							<a class="btn btn-theme" href="
								<?= base_url() ?>login">Iniciar sesión
							</a>
						</div>
					</div>
				</div>
				<!-- End Intro Content -->
			</div>
			<!-- End container -->
		</section>
	<!-- END INTRO -->
	<!-- seccion de creacion de usuario -->
	<section class="CrearUsuario">
		<div class="container">
			<!-- SECTION TITLE -->
			<div class="row">
				<div class="col-sm-12 titlebar">
					<h2 style="color:#333;">¿CÓMO CREAR EL USUARIO?</h2>
					<h3 style="color:#333;" >Recuerda que para registrar su bicicleta es indispensable tener un usuario.</h3>
				</div>
			</div>
			<div class="col-sm-6 media-wr">
				<img src="/SearchBike/plantilla/img/iniciosesion.png" width="100%" height="100%">
			</div>
			<div class="col-sm-6" >
				
					<h2 class='xh-Bold'>1. si ya estas registrado puedes ir al inicio de sesión</h2>
					<div class="excerpt">
					Diligencie sus datos básicos,correo electrónico y clave.
					<br><br>
					<a class="btn btn-theme" href="
								<?= base_url() ?>login">Iniciar sesión
							</a>
					</div>
				
				
			</div>
		</div>
		<div class="spacer2"></div>
	</section>
<!-- fin de seccion -->
	<section>

		<div class="CrearUsuario container make-row">
			<div class="row">
				<div class="col-sm-6" >
					<center>
						<h2 class='xh-Bold'>2. En caso de  no tener cuenta </h2>
						<div class="excerpt">
						debes diligenciar ingresar todos los datos solicitados que tiene el formulario para poder pertenecer a Search Bike 						</div>
							<br><br>
						<a class="btn btn-theme" href="
								<?= base_url() ?>registro">Regístrate 
							</a>
					
					</center>
				</div>
				<div class="col-sm-6 media-wr" id='animIt8'>
					<img src="/SearchBike/plantilla/img/registro.png" width="100%" height="100%">
					
				</div>
			</div>
			<div class="container make-row CrearUsuario">
				<div class="row">
					<div class="col-sm-6 media-wr" id='animIt9'>
						<figure class='media-news'>
						<img src="/SearchBike/plantilla/img/registrobici.png" width="100%" height="100%">
						</figure>
					</div>
					<div class="col-sm-6" id='animIt10'>
						<center>
							
							<h2 > ¿CÓMO REGISTRAR UNA BICICLETA?</h2>
							<div class="excerpt">
								1. ingrese los datos de su bicicleta
								2. Diligencie los datos de marca, color, tipo de bicicleta, número serial del marco y modelo.
								3. Deberá leer la declaración juramentada y aceptar para seguir con el proceso de registro de términos.
							
							</div>
							<a data-toggle="modal" role="button" href="#myModal" class="btn submit a-trig reg-footer inside">Solicitar información </a>
						</center>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 CrearUsuario" >
					<center>
						<h2 class='xh-Bold'>¿CÓMO HACER UNA DENUNCIA POR HURTO? </h2>
						<div class="excerpt">
						Para reportar el hurto de su bicicleta, deberá realizar la denuncia en el portal de la Policía  <a style="color: #333;" href="https://adenunciar.policia.gov.co/Adenunciar/Login.aspx?ReturnUrl=%2fadenunciar%2f"> Dando click aqui</a> y posterior a ello debe iniciar sesión y adjuntar en el sistema de SearchBike , el Número Único de Caso – NUC y el número de radicado.
						 con el lugar y la fecha del hurto despues de ello la bici quedará reportada como hurtada y el registro de la bicicleta se actualiza al estado “Hurtada”.
						<br><br>
						<a class="btn btn-theme" href="
								<?= base_url() ?>login">Iniciar sesión
						</a>
					
					</center>
				</div>
				<div class="col-sm-6 media-wr" id='animIt8'>
					<img src="/SearchBike/plantilla/img/DenunciaCiudadana.png" width="100%" height="100%">
					
				</div>
			</div>


			<div class="CrearUsuario container make-row">
				<div class="row">
					<div class="col-sm-6 media-wr" id='animIt9'>
						<figure class='media-news'>
						<img src="/SearchBike/plantilla/img/consulta.png" width="100%" height="100%">
						</figure>
					</div>
					<div class="col-sm-6" id='animIt10'>
						<center>
							

							<h2 > ¿CÓMO CONSULTAR SI UNA BICICLETA ESTÁ REPORTADA COMO ROBADA?</h2>
							<div class="excerpt">
							Para poder conocer esta información, la bicicleta debe estar registrada. La consulta se hace ingresando el número de serial del marco.

							</div>
							<a style="margin-top:15px"class="btn btn-theme" href="
								<?= base_url() ?>consulta">Consulta De Bicicletas
							</a>						</center>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-6 CrearUsuario" >
					<center>
						

						<h2 class='xh-Bold'>MAPAS DE CALOR</h2>
						<div class="excerpt">
							Puede visualizar mapas de la ciudad que muestran las zonas más inseguras en términos de seguridad personal para ciclistas en Bogotá.
						<br><br>
						<a class="btn btn-theme" href="
								<?= base_url() ?>Reporte">Ver Mapas
						</a>
					
					</center>
				</div>
				<div class="col-sm-6 media-wr" id='animIt8'>
					<img src="/SearchBike/plantilla/img/bogotaLocalidades.jpeg" width="100%" height="100%">
					
				</div>
			</div>





		</div>
	</section>
		
		