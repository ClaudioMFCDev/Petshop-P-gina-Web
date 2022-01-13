



<h1 class=" font-weight-bold border border-success text-center bg-light text-dark pb-2 mt-2"> Detalles de la venta </h1><!--DEBE RECIBIR TITULO
									COMO PARAMETRO -->

<div class="container">
	
		<table class="table table-striped table-dark">
		  <thead>
		  	<!--TITULOS -->
		    <tr>
		      <th scope="col">ID venta</th>
		      <th scope="col">ID producto</th>
		      <th scope="col">Detalle cantidad</th>
		      <th scope="col">Detalle precio</th>
		    </tr>

		  </thead>


		  <tbody>

		    <!--REGISTROS CREADOS CON FOREACH -->

		    <?php foreach($detalle as $row) { ?>

		    <tr>
		      <td> <?php echo $row->venta_id; ?> </td>
		      <td> <?php echo $row->id_producto; ?> </td>
		      <td> <?php echo $row->detalle_cantidad; ?> </td>
		      <td> <?php echo $row->detalle_precio;?> </td>
		    </tr> 
		<?php } ?>

		  </tbody>


		</table>

</div>