
<h1 class=" font-weight-bold border border-success text-center bg-light text-dark pb-2 mt-2"> GESTION DE PRODUCTOS </h1>

<div class="container">
	
		<table class="table table-striped table-dark">
		  <thead>
		  	<!--TITULOS -->
		    <tr>
		      <th scope="col">ID Producto</th>
		      <th scope="col">Imagen</th>
		      <th scope="col">Marca</th>
		      <th scope="col">Tamaño</th>
		      <th scope="col">Etapa</th>
		      <th scope="col">Precio</th>
		      <th scope="col">Stock</th>
		      <th scope="col">Descripción</th>
		      <th scope="col">Categoria</th>
		      <th scope="col">Activar/Eliminar</th>
		      <th scope="col">|EDITAR|</th>

		    </tr>

		  </thead>


		  <tbody>


		    <!--REGISTROS CREADOS CON FOREACH -->

		    <?php foreach($balanceado as $row) { ?>

		    <tr>
		      <td> <?php echo $row->id_producto; ?> </td>
		      <td> <img src="<?php echo base_url('/uploads/').$row->imagen?>" alt="" height="100" width="100"> </td>
		      <td> <?php echo $row->marca; ?> </td>
		      <td> <?php echo $row->tamanio_descripcion; ?> </td>
		      <td> <?php echo $row->etapa_descripcion; ?> </td>
		      <td> <?php echo $row->precio; ?> </td>
		      <td> <?php echo $row->stock; ?> </td>
		      <td> <?php echo $row->descripcion; ?> </td>
		      <td> <?php echo $row->categoria_descripcion; ?> </td>

		      <?php

		      if ( ($row->estado) == 1 ){

		      	?>
		      	<td> <a class="btn btn-success" href="<?php echo base_url("eliminar_bal1/$row->id_producto"); ?>">Eliminar</a> </td>

		      	<?php

		      } else {

		      	?>

		      	<td> <a class="btn btn-danger" href="<?php echo base_url("activar_bal/$row->id_producto"); ?>">Activar</a> </td>

		  <?php } ?>

		      <td> <a class="btn btn-success" href="<?php echo base_url("Balanceado_controller/editar_bal/$row->id_producto"); ?>">Editar</a> </td>

		    </tr> 
		<?php } ?>

		  </tbody>


		</table>

</div>