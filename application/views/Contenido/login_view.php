<hr>
<h1 class="text-center bg-dark text-white pb-2 font-weight-bold">
	Ingrese a su cuenta

</h1>

<div class="container font-weight-bold bg-dark text-dark my-4 py-4">
	
	<div class="bg-success px-4">
		<div class="w-50 mx-auto">
		
		<!--//abro formulario para la ruta 'registrar' -->
		<?php echo form_open('iniciar_sesion'); ?>
			
			<!--//EMAIL -->
			<div class="form-group pt-4">
			    <label for="mail">Ingrese su correo electrónico</label>
			    <?php echo form_input([ 'name' => 'mail', 'id' => 'mail', 'type' => 'email', 'class' => 'form-control', 'placeholder' => 'Ingrese su mail', 'autofocus' => 'autofocus', 'value' =>set_value ('mail')]); ?>

			</div><span class="text-danger"> <?php echo form_error('mail'); ?> </span>
			
			<!-- //PASS-->
			<div class="form-group pb-4">
				    <label for="password">Ingrese su contraseña</label>
				    <?php echo form_input([ 'name' => 'password', 'id' => 'password', 'type' => 'password', 'class' => 'form-control', 'placeholder' => 'Ingrese su password', 'autofocus' => 'autofocus', 'value' =>set_value ('password')]); ?>

			</div><span class="text-danger"> <?php echo form_error('password'); ?> </span>
			
			<!--//BOTON REGISTRARME// --> 
			<div class="form-group pt-4">
				
				<!-- Se enviará el formulario a la ruta 'registrar' donde el método con las reglas y mensajes, si todo está correcto, registrará al cliente-->
				<?php echo form_submit('Ingresar', 'Ingresar', "class= 'btn btn-dark' "); ?>

			</div>

			<div class="py-2">
				<a class="btn btn-primary " href="<?php echo base_url('registrarse') ?>">Registrarme</a>


			</div>

			<div class="py-2">
				<a class="btn btn-danger " href="">Olvidé mi contraseña</a>


			</div>

		<!--//cierro formulario para la ruta 'registrar' -->	
		<?php echo form_close(); ?>
		<br><br>
	</div>

</div>

</div>