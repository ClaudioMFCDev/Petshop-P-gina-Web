<br>
<h1 class="text-center bg-dark text-white">Catálogo de productos</h1>


<div class="container bg-dark my-4 py-4">
	
	<div class="row">
		
		<?php foreach ($producto as $row) { ?>
			
				<div class="col-md-3 mb-2">
					
					<div class="card text-center">

						<img class="mx-auto" src="<?php echo base_url('/uploads/'). $row->imagen ?>" height="150" width="150" alt="Imagen-Tarjeta">
						
						<div class="card-body">
							
							<h5 class="card-title"> <?php echo $row->marca; echo " - "; echo $row->categoria_descripcion ?>   </h5>
							<h5 class="card-text"> <?php echo "$"; echo $row->precio; ?> </h5>
							<p class="card-text"> <?php echo $row->descripcion; ?> </p>


							<?php 	if ($this->session->userdata('login')) {
										
										echo form_open('Carrito_controller/agregar_carrito');
										echo form_hidden('id', $row->id_producto);
										echo form_hidden('titulo', $row->marca);
										echo form_hidden('categoria', $row->categoria_descripcion);
										echo form_hidden('precio', $row->precio);
										
										echo form_close();

									}

							?>

						</div>

					</div>

					
				</div>

				<?php } ?>			

	</div>

</div>