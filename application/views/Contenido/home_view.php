		

		<!-- CARROUSELL -->
		<section class="mx-4 my-2">
			
			<div id="carouselExampleFade" class="border border-success rounded  carousel slide carousel-fade"  data-ride="carousel">
			  <div class="carousel-inner">

			    <div class="carousel-item ">
			      <img src="assets/img/adulto.jpg" class="d-block w-100"   alt="Alimento Perro Adulto">
			    </div>

			    <div class="carousel-item active">
			      <img src="assets/img/casagato.jpg" class="d-block w-100"  alt="Casa Gato">
			    </div>			    

			    <div class="carousel-item">
			      <img src="assets/img/toys.jpg" class="d-block w-100"   alt="Juguetes Caninos">
			    </div>		    

			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Anterior</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Siguiente</span>
			  </a>
			</div>


		</section>

		<!-- CARDS -->

		<div>
			
			<div class="container my-4 py-4 px-4">

				<div class="col-md bg-light border border-success">
					<img  src="assets/img/mercado-pago.png" width="100%" height="150">
				
				</div>

			</div>

		</div>

			<div class="container bg-light text-dark text-center border border-success pb-2">
				
				<h1 class="font-weight-bold">Los accesorios más vendidos para canes!</h1>
				<a class="text-right h2" href="<?php echo base_url('el_catalogo') ?>">>>Ver catátolo completo<<</a>

			
			</div>

<div class="container bg-dark mb-4 py-4">
	
	<div class="row">
		

		<?php foreach ($canes as $row) { ?>
			
				<div class="col-md-2 mb-2">
					
					<div class="card text-center">

						<img class="mx-auto" src="<?php echo base_url('/uploads/'). $row->imagen ?>" height="100" width="100" alt="Imagen-Tarjeta">
						
						<div class="card-body">
							
							<h5 class="card-title"> <?php echo $row->marca; echo " - "; echo $row->categoria_descripcion ?>   </h5>
							<h5 class="card-text"> <?php echo "$"; echo $row->precio; ?> </h5>
							<p class="card-text"> <?php echo $row->descripcion; ?> </p>

							

							<?php 	if (($this->session->userdata('perfil') == 1) ) {
										
										echo form_open('el_catalogo');
										echo form_hidden('id', $row->id_producto);
										echo form_hidden('categoria', $row->categoria_descripcion);
										echo form_hidden('titulo', $row->descripcion);
										echo form_hidden('precio', $row->precio);
										

										echo form_submit('comprar', 'comprar', "class= 'btn btn-success' ");
										echo form_close();

									}

							?>

						</div>

					</div>

					
				</div>

			<?php } ?>

	</div>

</div><!-- FIN CARDS -->

<div>
	
	<div class="container my-4 py-4 px-4">

		<div class="col-md bg-light border border-success rounded">
			<img  src="assets/img/tarjeta-de-cretido.png" width="100%" height="100">
				
		</div>

	</div>

</div>							

