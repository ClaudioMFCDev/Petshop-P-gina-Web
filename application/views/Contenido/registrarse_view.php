
<hr>
<h1 class="text-center bg-dark text-white pb-2">
	Registrarse como cliente

</h1>

<div class="container bg-dark text-white my-4">
	
	<div class="w-50 mx-auto">
		
		<!--//abro formulario para la ruta 'registrar' -->
		<?php echo form_open('registrar'); ?>

			<!--//NOMBRE -->
			<div class="form-group pt-4">
				    <label for="nombre">Ingrese su nombre</label>
				    
				    <?php echo form_input([ 'name' => 'nombre', 'id' => 'nombre', 'class' => 'form-control', 'placeholder' => 'Ingrese su nombre', 'autofocus' => 'autofocus', 'value' =>set_value ('nombre')]); ?>

			</div> <span class="text-danger"> <?php echo form_error('nombre'); ?> </span>
			
			<!--//APELLIDO -->
			<div class="form-group">
				    <label for="apellido">Ingrese su apellido</label>
				    <?php echo form_input([ 'name' => 'apellido', 'id' => 'apellido', 'class' => 'form-control', 'placeholder' => 'Ingrese su apellido', 'autofocus' => 'autofocus', 'value' =>set_value ('apellido')]); ?>

			</div> <span class="text-danger"> <?php echo form_error('apellido'); ?> </span>
			
			<!--//TELEFONO -->
			<div class="form-group">
				    <label for="telefono">Ingrese su teléfono</label>
				    <?php echo form_input([ 'name' => 'telefono', 'id' => 'telefono', 'type' => 'text', 'class' => 'form-control', 'placeholder' => 'Ingrese su telefono', 'autofocus' => 'autofocus', 'value' =>set_value ('telefono')]); ?>
				    
			</div><span class="text-danger"> <?php echo form_error('telefono'); ?> </span>
			
			<!--//EMAIL -->
			<div class="form-group">
			    <label for="mail">Ingrese su correo electrónico</label>
			    <?php echo form_input([ 'name' => 'mail', 'id' => 'mail', 'type' => 'email', 'class' => 'form-control', 'placeholder' => 'Ingrese su mail', 'autofocus' => 'autofocus', 'value' =>set_value ('mail')]); ?>

			</div><span class="text-danger"> <?php echo form_error('mail'); ?> </span>

			<!-- DIRECCION -->
			<div class="form-group pb-2">
				    <label for="domicilio">Domicilio</label>
				    <?php echo form_input([ 'name' => 'domicilio', 'id' => 'domicilio', 'class' => 'form-control', 'placeholder' => 'Ingrese domicilio', 'autofocus' => 'autofocus', 'value' =>set_value ('domicilio')]); ?>

			</div><span class="text-danger"> <?php echo form_error('domicilio'); ?> </span>
			
			<!-- //PASS-->
			<div class="form-group">
				    <label for="password">Ingrese su contraseña</label>
				    <?php echo form_input([ 'name' => 'password', 'id' => 'password', 'type' => 'password', 'class' => 'form-control', 'placeholder' => 'Ingrese su password', 'autofocus' => 'autofocus', 'value' =>set_value ('password')]); ?>

			</div><span class="text-danger"> <?php echo form_error('password'); ?> </span>
			
			<!-- //PASSCONFIRMACION-->
			<div class="form-group pb-2">
				    <label for="passconf">Confirmar su contraseña</label>
				    <?php echo form_input([ 'name' => 'passconf', 'id' => 'passconf', 'type' => 'password', 'class' => 'form-control', 'placeholder' => 'Vuelva a ingresar su contraseña', 'autofocus' => 'autofocus', 'value' =>set_value ('passconf')]); ?>

			</div><span class="text-danger"> <?php echo form_error('passconf'); ?> </span>
			
			<!--//BOTON REGISTRARME// --> 
			<div class="form-group pb-4">
				
				<!-- Se enviará el formulario a la ruta 'registrar' donde el método con las reglas y mensajes, si todo está correcto, registrará al cliente-->
				<?php echo form_submit('Registrarme', 'Registrarme', "class= 'btn btn-success' "); ?>

			</div>

		<!--//cierro formulario para la ruta 'registrar' -->	
		<?php echo form_close(); ?>

	</div>

</div>