
	<!--footer -->

	<footer class="bg-dark text-white py-4">

		<div class="container footer">
			
			<nav class="row">

				<!-- Logo <img src="" alt="Patitas-logo" class="img-logo mr-2"> -->
				<ul class="col-md-3"><a href="<?php echo base_url() ?>" class="text-success text-uppercase d-flex align-items-center">Patitas, tu petshop!</a>
				</ul>

				<!-- menu -->
				<ul class="col-md-3 list-unstyled">

					<li class="font-weight-bold text-uppercase text-success">Sobre nosotros</li>
					<li> <a href="<?php echo base_url('nosotros') ?>  " class="text-reset"> Quienes Somos</a> </li>
					<li> <a href="<?php echo base_url('consultas') ?>  " class="text-reset"> Nuestras Sucursales</a> </li>
					<li> <a href="<?php echo base_url('terminos_y_condiciones') ?>  " class="text-reset"> Terminos y condiciones</a> </li>
					<li> <a href="<?php echo base_url('consultas') ?>  " class="text-reset"> Trabaja con nosotros</a> </li>

				</ul>

				<!-- menu -->
				<ul class="col-md-3 list-unstyled">
					<li class="font-weight-bold text-uppercase text-success">Visitá también</li>
					<li> <a href="<?php echo base_url('ofertas') ?>  " class="text-reset"> Ofertas y promociones</a> </li>
					<li> <a href="<?php echo base_url('entregas') ?>  " class="text-reset"> Formas de entrega</a> </li>
					<li> <a href="<?php echo base_url('blog') ?>  " class="text-reset"> Nuestro blog</a> </li>

				</ul>

				<!-- redes sociales-->
				<ul class="col-md-3 list-unstyled">
					
					<li class="font-weight-bold text-uppercase text-success">Redes Sociales</li>
					<i class=" ml-2 mr-4 fab fa-instagram" ></i>
					<i class=" mr-4 fab fa-facebook" ></i>
					<i class="fab fa-twitter"></i>
					

				</ul>								


			</nav>

		</div>		

	</footer>

		<!-- Libreria jQuery requerida por los plugins de JavaScript -->
		<script src="<?php echo base_url () ?>assets/js/jquery-3.6.0.min.js"></script>
		<script src="<?php echo base_url () ?>assets/js/bootstrap.min.js"></script>

	</body>

</html>