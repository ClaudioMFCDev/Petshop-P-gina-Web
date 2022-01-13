

<h1 class=" font-weight-bold border border-success text-center bg-light text-dark pb-2 mt-2"> Lista de mensajes </h1><!--DEBE RECIBIR TITULO
													COMO PARAMETRO -->

<div class="container">
	
		<table class="table table-striped table-dark">
		  <thead>
		  	<!--TITULOS -->
		    <tr>
		      <th scope="col">ID Consulta</th>
		      <th scope="col">Nombre y apellido</th>
		      <th scope="col">E-mail</th>
		      <th scope="col">Tipo consulta</th>
		      <th scope="col">Detalle</th>
		      <th scope="col">Estado</th>
		    </tr>

		  </thead>


		  <tbody>


		    <!--REGISTROS CREADOS CON FOREACH -->

		    <?php foreach($mensajes as $row) { ?>

		    <tr>
		      <td> <?php echo $row->id_consulta; ?> </td>
		      <td> <?php echo $row->nyap; ?> </td>
		      <td> <?php echo $row->mail; ?> </td>
		      <td> <?php echo $row->mensajes_descripcion; ?> </td>
		      <td> <?php echo $row->descripcion; ?> </td>

		      <?php

		      if ( ($row->estado_mensaje) == 1 ){

		      	?>
		      	<td> <a class="btn btn-danger" href="<?php echo base_url("fue_leido/$row->id_consulta"); ?>">Marcar como leido</a> </td>

		      	<?php

		      } else {

		      	?>

		      	<td> <a class="btn btn-success" href="<?php echo base_url("fue_noLeido/$row->id_consulta"); ?>">Marcar como no leido</a> </td>		      

		      	<?php } ?>
		    </tr> 
		
		    <?php } ?>
		  </tbody>


		</table>

</div>
