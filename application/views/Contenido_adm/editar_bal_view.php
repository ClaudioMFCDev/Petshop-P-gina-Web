<hr>
<h1 class="text-center bg-dark text-white pb-2">
	Editar Balanceado

</h1>

<div class="container bg-dark text-white my-4">
	
	<div class="w-50 mx-auto">
		
		<!--//abro formulario para la ruta 'insertar_libro' -->
		<?php echo form_open_multipart("Balanceado_controller/actualizar_bal/$id_producto"); ?>

			<!--CATEGORIA -->
			<div class="form-group pt-4">
				    <label for="categoria">Categoria del producto</label>

				    <?php
				    $lista1['0'] = 'Seleccione categoria';

				    foreach ($cate_bal as $row) {
				    	$lista1[$row->id_categoria] = $row->categoria_descripcion;

				    }

				    echo form_dropdown('categoria', $lista1, $categoria, 'class="form_control input-md"');
				    ?>				    
				    
			</div> <span class="text-danger"> <?php echo form_error('categoria'); ?> </span>		

			<!--//MARCA -->
			<div class="form-group ">
				    <label for="marca">Marca (Pedigree, Sieger, etc.)</label>
				    
				    <?php echo form_input([ 'name' => 'marca', 'id' => 'marca', 'class' => 'form-control', 'autofocus' => 'autofocus', 'value' => "$marca"]); ?>

			</div> <span class="text-danger"> <?php echo form_error('marca'); ?> </span>
			
			<!--//TAMAÑO -->
			<div class="form-group">
				    <label for="tamanio_mascota">Tamaño de mascota</label>

				    <?php
				    $lista2['0'] = 'Seleccione tamaño';

				    foreach ($cate_tamanio as $row) {
				    	$lista2[$row->id_tamanio_categoria] = $row->tamanio_descripcion;
				    }

				    echo form_dropdown('tamanio_mascota', $lista2, $tamanio_mascota, 'class="form_control"');
				    ?>				    
				    
			</div> <span class="text-danger"> <?php echo form_error('tamaño'); ?> </span>
			
			<!--//ETAPA DE VIDA -->
			<div class="form-group">
				    <label for="etapa_mascota">Etapa de vida</label>

				    <?php
				    $lista3['0'] = 'Seleccione etapa';

				    foreach ($cate_etapa as $row) {
				    	$lista3[$row->id_etapa_categoria] = $row->etapa_descripcion;
				    }

				    echo form_dropdown('etapa_mascota', $lista3, $etapa_mascota, 'class="form_control"');
				    ?>
				    
			</div><span class="text-danger"> <?php echo form_error('etapa'); ?> </span>
			

			<!-- IMAGEN -->
			<div class="form-group">
				<img src="<?php echo base_url('/uploads/') , $imagen ?>" alt="" height="100" width="100">
				 <label for="imagen">Selec. Imagen</label>
				 
				 <?php echo form_input([ 'name' => 'imagen', 'id' => 'imagen', 'type' => 'file' ]); ?>

			</div> <span class="text-danger"> <?php echo form_error('imagen'); ?> </span>

			<!--//PRECIO -->
			<div class="form-group">
			    <label for="precio">Precio</label>
			    <?php echo form_input([ 'name' => 'precio', 'id' => 'precio', 'class' => 'form-control', 'value' => "$precio"]); ?>

			</div><span class="text-danger"> <?php echo form_error('precio'); ?> </span>

			<!-- STOCK -->
			<div class="form-group pb-2">
				    <label for="stock">Stock</label>
				    <?php echo form_input([ 'name' => 'stock', 'id' => 'stock', 'class' => 'form-control', 'autofocus' => 'autofocus', 'value' => "$stock"]); ?>

			</div><span class="text-danger"> <?php echo form_error('stock'); ?> </span>
			
			<!-- DESCRIPCION -->
			<div class="form-group">
				 <label for="descripcion">Descripción: (envase) de (cantidad kilos) de (tipo comida:   seca, etc).</label>
				 <?php echo form_input([ 'name' => 'descripcion', 'id' => 'descripcion', 'class' => 'form-control', 'value' => "$descripcion"]); ?>

			</div> <span class="text-danger"> <?php echo form_error('descripcion'); ?> </span>



			
			<!--//BOTON AGREGAR// --> 
			<div class="form-group pb-4">
				
				<!-- Se enviará el formulario a la ruta 'registrar' donde el método con las reglas y mensajes, si todo está correcto, registrará al cliente-->
				<?php echo form_submit('Modificar', 'Modificar', "class= 'btn btn-success' "); ?>

			</div>

		<!--//cierro formulario para la ruta '' -->	
		<?php echo form_close(); ?>

	</div>

</div>