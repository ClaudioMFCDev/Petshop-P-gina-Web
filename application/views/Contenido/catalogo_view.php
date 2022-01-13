
<h1 class=" font-weight-bold border border-success text-center bg-light text-dark pb-2 mt-2"> CATÁLOGO </h1>



			<!--Filtros admin -->
			
			<!--CATEGORIA -->
			<div class=" container bg-dark pt-4 pb-2">

					
				    <label class="text-white pl-4 h3" for="categoria ">Categoria</label>

				    <a type="button" class="btn btn-success mb-2 ml-2" href='0'>Ver todo</a>

				    <?php foreach ($cate_prod as $row) { ?>
				    	<a class="dropdown-item h6 text-success font-weight-bold" href="<?php echo base_url("el_catalogo_x_cat/$row->id_categoria") ?>">> <?php echo $row->categoria_descripcion ?> </a>
				    <?php } ?>	    
			</div>		
		

<div class="container bg-dark mb-4 py-4">
	
	<div class="row">
		
		<?php foreach ($producto as $row) { ?>

               <?php
                 if ( ($row->estado) == 1 ) { ?>

			
				<div class="col-md-3 mb-2 py-2">
					
					<div class="card text-center">

						<img class="mx-auto" src="<?php echo base_url('/uploads/'). $row->imagen ?>" height="150" width="150" alt="Imagen-Tarjeta">
						
						<div class="card-body">
							
							<h5 class="card-title"> <?php echo $row->marca; echo " - "; echo $row->categoria_descripcion ?>   </h5>
							<h5 class="card-text"> <?php echo "$"; echo $row->precio; ?> </h5>
							<p class="card-text"> <?php echo $row->descripcion; ?> </p>
							<p class="card-text">-STOCK- <?php echo $row->stock; ?> </p>


							<?php 	if ( ($this->session->userdata('perfil') == 1) && ( ($row->stock) >= 1 )) {
										
										echo form_open('Carrito_controller/agregar_carrito');
										echo form_hidden('id', $row->id_producto);
										echo form_hidden('categoria', $row->categoria_descripcion);
										echo form_hidden('titulo', $row->descripcion);
										echo form_hidden('precio', $row->precio);
										echo form_hidden('stock', $row->stock);

										echo form_submit('comprar', 'Agregar al carrito', "class= 'btn btn-success' ");
										echo form_close();

									} elseif ( ($row->stock) == 0 )  { ?>
										<p class="item-price"><strike></strike> <span> Sin Stock! </span></p>
									<?php } ?>

							

						</div>

					</div>

					
				</div>
				<?php } ?>
			<?php } ?>

	</div>

</div>
