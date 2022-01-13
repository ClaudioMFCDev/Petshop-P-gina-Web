



<h1 class=" font-weight-bold border border-success text-center bg-light text-dark pb-2 mt-2"> Lista de ventas </h1><!--DEBE RECIBIR TITULO
						COMO PARAMETRO -->

<div class="container bg-success">
	
		<table class="table table-striped table-dark">
		  <thead>
		  	<!--TITULOS -->
		    <tr>
		      <th scope="col">ID venta</th>
		      <th scope="col">Fecha</th>
		      <th scope="col">ID cliente</th>
		      <th scope="col"> |Ver mas| </th>
		    </tr>

		  </thead>


		  <tbody>


		    <!--REGISTROS CREADOS CON FOREACH -->

		    <?php foreach($las_ventas as $row) { ?>

		    <tr>
		      <td> <?php echo $row->id_venta; ?> </td>
		      <td> <?php echo $row->fecha_venta; ?> </td>
		      <td> <?php echo $row->id_cliente; ?> </td>
		      <td> <a class="btn btn-success" href="<?php echo base_url("detalle_venta/$row->id_venta"); ?>">Ver detalles</a> </td>
		    </tr> 
		<?php } ?>

		  </tbody>


		</table>

</div>