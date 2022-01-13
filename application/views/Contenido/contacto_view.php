

<h1 class="font-weight-bold border border-success text-center bg-light text-dark pb-2 mt-2">
	Datos de contacto y consultas. Escríbenos!

</h1>

<section class="container bg-dark text-white pt-4 pb-2">
	
	<dl class="row">
			
		<dt class="col-sm-4">Teléfono de contacto</dt>
  		<dd class="col-sm-8">(03794) 472886</dd>
  		<hr>	

  		<dt class="col-sm-4">Whatsapp o Mensajes de texto</dt>
  		<dd class="col-sm-8">(03794) 15598723</dd>
  		<hr>

  		<dt class="col-sm-4">Dirección</dt>
  		<dd class="col-sm-8">Suc 1: Av. Cazadores Correntinos 5200, Corrientes Capital.</dd>	
  		<dd class="col-sm-12 text-center">Suc 2: Av. Independencia 5200, Corrientes Capital.</dd>	
  		<hr>

  		<dt class="col-sm-4">Correo Electrónico</dt>
  		<dd class="col-sm-8">patitas.tupetshop@gmail.com</dd>
  		<hr>
  		
	</dl>

</section>

<section class="container ml-auto bg-light border border-success">
	
	<div class="row py-2">
		<!--Formulario -->
		<div class="col-md-4 font-weight-bold">
			
			<?php echo form_open('registrar_consulta'); ?>

				<!-- NOMBRE Y APELLIDO -->
				<div class="form-group ">
				    <label for="nyap">Ingrese nombre y apellido</label>
				     <?php echo form_input([ 'name' => 'nyap', 'id' => 'nyap', 'class' => 'form-control', 'placeholder' => 'Ingrese su nombre y apellido', 'autofocus' => 'autofocus']); ?>

			  	</div> <span class="text-danger"> <?php echo form_error('nyap'); ?> </span>

				  <!-- EMAIL -->
				  <div class="form-group">
				    <label for="mail">Ingrese su correo electrónico</label>
				     <?php echo form_input([ 'name' => 'mail', 'id' => 'mail', 'class' => 'form-control', 'placeholder' => 'Ingrese su mail', 'autofocus' => 'autofocus', 'value' =>set_value ('mail')]); ?>

				  </div> <span class="text-danger"> <?php echo form_error('mail'); ?> </span>


				  <!-- MOTIVO -->

				  <div class="form-group">
				    <label for="motivo">Motivo de consulta</label>

				    <?php
				    $lista['0'] = 'Seleccione motivo';

				    foreach ($motivos as $row) {
				    	$lista[$row->id_categoria] = $row->mensajes_descripcion;
				    }

				    echo form_dropdown('motivo', $lista, '0', 'class="form_control"');
				    ?>
				    
				  </div> <span class="text-danger"> <?php echo form_error('motivo'); ?> </span>

				  <!-- DESCRIPCION-->

				  <div class="form-group">
				    <label for="descripcion">Breve descripción</label>
				    <?php echo form_input([ 'name' => 'descripcion', 'id' => 'descripcion', 'class' => 'form-control', 'placeholder' => 'Ingrese su descripcion', 'autofocus' => 'autofocus', 'value' =>set_value ('descripcion')]); ?>

				  </div> <span class="text-danger"> <?php echo form_error('descripcion'); ?> </span>

				  <div class="form-group">

				  	<!-- BOTON (name, etiqueta en pagina, ...) -->
					<?php echo form_submit('Enviar', 'Enviar', "class= 'btn btn-dark' "); ?>

				  </div>

					

				 <?php echo form_close(); ?>
		</div>
		
		<div class="col-md-8">

			<!-- Datos de contacto-->

			<!-- Mapa-->
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d221.2095567964222!2d-58.78882884978768!3d-27.489398024299646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94456bae9ddcf52f%3A0x8d3308fb7048d19!2sFR%20Motos!5e0!3m2!1ses-419!2sar!4v1618885154904!5m2!1ses-419!2sar" width="100%" height="450" style="border:1;" allowfullscreen="" loading="lazy"></iframe>
			
		</div>		
	
		
	</div>
		

</section>