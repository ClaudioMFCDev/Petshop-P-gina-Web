
<h1 class=" font-weight-bold border border-success text-center bg-light text-dark pb-2 mt-2"> Lista de clientes </h1><!--DEBE RECIBIR TITULO
									COMO PARAMETRO -->

<div class="container">
	
		<table class="table table-striped table-dark">
		  <thead>
		  	<!--TITULOS -->
		    <tr>
		      <th scope="col">ID cliente</th>
		      <th scope="col">Nombre</th>
		      <th scope="col">Apellido</th>
		      <th scope="col">Telefono</th>
		      <th scope="col">E-mail</th>
		      <th scope="col">Domicilio</th>
		      <th scope="col">Estado</th>
		    </tr>

		  </thead>


		  <tbody>


		    <!--REGISTROS CREADOS CON FOREACH -->

		    <?php foreach($clientes as $row) { ?>

		    <tr>
		      <td> <?php echo $row->id_persona; ?> </td>
		      <td> <?php echo $row->nombre; ?> </td>
		      <td> <?php echo $row->apellido; ?> </td>
		      <td> <?php echo $row->telefono; ?> </td>
		      <td> <?php echo $row->mail; ?> </td>
		      <td> <?php echo $row->domicilio; ?> </td>

		      <?php

		      if ( ($row->estado) == 1 ){

		      	?>
		      	<td> <a class="btn btn-danger" href="<?php echo base_url("eliminar_usuario/$row->id_persona"); ?>">Eliminar</a> </td>

		      	<?php

		      } else {

		      	?>

		      	<td> <a class="btn btn-success" href="<?php echo base_url("activar_usuario/$row->id_persona"); ?>">Activar</a> </td>		      

		      	<?php } ?>
		    </tr> 
		
		    <?php } ?>
		  </tbody>


		</table>

</div>
