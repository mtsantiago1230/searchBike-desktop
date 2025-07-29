<!-- Formulario -->
	<section id="contact" style="padding-bottom: 230px; background-image: url(<?= base_url() ?>plantilla/img/parallax_bg/consulta.png);">
		
		<div class="container">	
			
			<!-- SECTION TITLE -->				
			<div class="row">
				<div class="col-sm-12 titlebar" >
					<h2>Consulta el estado de una Bici</h2>
					<h3>Search Bike</h3>
				</div>
			</div>
				
			<!-- CONTACT FORM -->
			<div class="row" style="padding-left: 150px; padding-right: 150px;">
				
				<div class="col-sm-12">
					
					<form id="Consulta" action="<?=base_url()?>Welcome/resultadoConsulta" class="row consulta" method="post">
						
						<!-- Consulta de Bike -->
						<div class="col-md-12">
							<input type="taxt" name="nombreConsulta" class="form-control triggerAnimation animated undefined visible" data-animate="bounceIn" placeholder="Serial de la bicicleta" required=""> 
						</div>
							
						<!-- Submit Button -->
						<div class="col-md-12">							
							<div class="text-center">
								<input type="submit" value="Consultar" class="btn btn-theme triggerAnimation animated undefined visible" data-animate="bounceIn" style="font-size: 20px;    margin-top: 53px;">
							</div>  
						</div>
							
					</form>
					
				</div>

			</div>	   
			<!-- END CONTACT FORM -->	
				
		</div>	   
		<!-- End container	 -->

	</section>	 
	<!-- Fin -->