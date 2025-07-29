<!-- Formulario -->
<section id="contact" style="padding-bottom: 165px; background-image: url(<?= base_url() ?>plantilla/img/parallax_bg/inicio.png);">
		
		<div class="container">	
			
			<!-- SECTION TITLE -->				
			<div class="row">
				<div class="col-sm-12 titlebar" >
					<h2>Inicio de Sesión Seach Bike</h2>
				
				</div>
			</div>
				
			<!-- CONTACT FORM -->
			<div class="row" style="padding-left: 150px; padding-right: 150px;">
				
				<div class="col-sm-12">
					
					<!-- form -->
					<form id="login" action="<?=base_url()?>Iniciar" class="row iniciar " method="post">
						
						<!-- usuario -->
						<div class="col-md-12">
							<input type="text" name="iniciarUser" class="form-control triggerAnimation animated undefined visible" data-animate="bounceIn" placeholder="Ingrese su correo" required=""> 
						</div>

						<!-- password -->	
						<div class="col-md-12">
							<input type="password" name="iniciarPass" class="form-control triggerAnimation animated undefined visible" data-animate="bounceIn" placeholder="Contraseña" required=""> 
						</div>
							
						<!-- Submit Button -->
						<div class="col-md-12">	

						<div class="text-center col-md-4">
								<input type="submit" value="Iniciar Sesión" class="btn btn-theme triggerAnimation animated undefined visible" data-animate="bounceIn" style="font-size: 20px; min-width: 198px;">
							</div> 	
							<div class="text-center col-md-4">
								<a class="text-center btn btn-theme " href="<?= base_url() ?>registro" style=" min-width: 198px; font-size: 20px;">Regístrate 
								</a>	
							</div>		
								
							
							<div class="text-center col-md-4">
								<button type="button" class="btn text-center btn btn-theme" data-toggle="modal" data-target="#exampleModalCenter" style=" min-width: 198px; font-size: 20px;">
									Olvide mi Contraseña
								</button>
							</div>   
						</div>
							
					</form>
					
				</div>

			</div>	   
			<!-- END CONTACT FORM -->	
				
		</div>	   
		<!-- End container -->	

	</section>	 

	
	<!-- Fin -->

	<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Restaurar La Contraseña  </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <form id="restaurar_clave" action="<?=base_url()?>Restaurar" class="row iniciar " method="post">
		
	  	<div class="col-md-12">
		  <label for="">Ingrese el correo Registrado </label>
			<input type="text" name="email" class="form-control triggerAnimation animated undefined visible" data-animate="bounceIn" placeholder="Ingrese su correo" required=""> 
		</div>

	  				
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Restaurar</button>
	  </div>
	  </form>
    </div>
  </div>
</div>