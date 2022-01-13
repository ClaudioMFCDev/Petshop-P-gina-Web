


<section>

<div class="container bg-light border border-dark py-4 my-4">
	

	<h2 class="text-center font-weight-bold"><?php echo $messaje ?></h2>

	<div class="container">
		
			<table class="table table-striped table-dark border border-success rounded">

			<?php if($cart = $this->cart->contents()): ?>

			  <thead class="text-center">
			  	<!--TITULOS -->
			    
			      <th scope="col">Item nro.</th>
			      <th scope="col">Descripcion</th>
			      <th scope="col">Categoria</th>
			      <th scope="col">Precio</th>
			      <th scope="col">Cantidad</th>
			      <th scope="col">Subtotal</th>
			      <th scope="col">|ACCION|</th>

			    

			  </thead>


			  <tbody class="text-center">

			    <!--REGISTROS CREADOS CON FOREACH -->

			    <?php 
			    $i = 1;

			    foreach($cart as $item):?>

			    <tr>
			      <td > <?php echo $i++; ?> </td>

			      <td> <?php echo $item['name']; ?> </td>

			      <td> <?php echo $item['options']; ?> </td>

			      <td> $<?php echo $this->cart->format_number($item['price'], 2); ?> </td>

			      <td> <?php echo $item['qty']; ?> </td>

			      <td> $<?php echo $this->cart->format_number($item['subtotal'], 2); ?> </td>

			      <td> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
				  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
				  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
					</svg> <?php echo anchor('carrito_controller/borrar/'.$item['rowid'], 'Eliminar'); ?> </td>

			    </tr> 

			      <?php endforeach; ?>

			    <tr>
			    	

			    	<td>
			    		<br>
			    		<button type="button" class="btn btn-danger" onclick="limpiar_carrito()">Vaciar carrito</button>

			    	</td>

			    	<td>
			    		<br>
			    		<a href="<?php echo base_url('guardar_venta'); ?>" class="btn btn-primary" role="button" >Comprar todo</a>

			    	</td>

			    	<td class="font-weight-bold">
			    		<br>
			    		Total de compra: $<?php echo number_format($this->cart->total(), 2); ?>

			    	</td>			    	

			    </tr>

			<?php endif; ?>

			  </tbody>


			</table>

			<script type="text/javascript">
				
				function limpiar_carrito(){

					var result = confirm('Desea eliminar los productos del carrito?');

					if(result) {

						window.location = "<?php echo base_url(); ?>carrito_controller/borrar/all";

					}else {
						return false; //cancela accion
					}
				}
				

			</script>
			<a href="<?php echo base_url('el_catalogo'); ?>" class="btn btn-success" role="button"> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
			  <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
			  <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
			</svg>	Volver al catálogo</a>
</div>			
</section>