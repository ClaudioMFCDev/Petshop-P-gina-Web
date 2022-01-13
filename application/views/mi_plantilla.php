<!DOCTYPE html>
<html lang="en">


	<head>
		<meta charset ="utf-8">
		<meta http-equiv= "X-UA-Compatible" content= "IE=edge">
		<!-- Responsivo -->
		<meta name="viewport" content="width=device-width, inicial-scale=1,
			shrink-to-fit=no">
			
		<title>Plantilla básica de Bootstrap</title>

		<!-- Bootstrap 
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<link rel="stylesheet" href="<assets/css/estilos.css">		
		-->
		
		<link href ="assets/css/bootstrap.min.css" rel="stylesheet">

		<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
		
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/estilos.css">


		








	</head>


	<body>

		<header>
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			  <a class="navbar-brand" href="#">Tu petshop</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>

			  </button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav ml-auto">

			      <li class="nav-item dropdown active">
			        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          Productos
			        </a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			          <a class="dropdown-item" href="#">Perros</a>
			          <a class="dropdown-item" href="#">Gatos</a>
			          <a class="dropdown-item" href="#">Aves</a>
			          <div class="dropdown-divider"></div>
			          <a class="dropdown-item" href="#">Otros</a>
			        </div>

			      </li>			    	

			      <li class="nav-item active">

			        <a class="nav-link" href="#">Contacto</a>
			      </li>

			      <li class="nav-item active">
			        <a class="nav-link" href="#">Ofertas</a>
			      </li>



			      <li class="nav-item active">
			        <a class="nav-link " href="#">Venta mayorista</a>
			      </li>

			    </ul>
			    <form class="form-inline my-2 my-lg-0">
			      <input class="form-control mr-sm-2" type="search" placeholder="Buscar..." aria-label="Search">
			      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
			    </form>
			  </div>
			</nav>			

		</header>

		<section>
			
			<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
			  <div class="carousel-inner">

			    <div class="carousel-item active">
			      <img src="assets/img/adulto.jpg" class="d-block w-100" alt="Alimento Perro Adulto">
			    </div>

			    <div class="carousel-item">
			      <img src="assets/img/toys.jpg" class="d-block w-100" alt="Juguetes Caninos">
			    </div>

			    <div class="carousel-item">
			      <img src="<assets/img/gatos.jpg" class="d-block w-100" alt="Casa-Juegos-Gatos">
			    </div>

				<div class="carousel-item">
			      <img src="assets/img/manual.jpg" class="d-block w-100" alt="Manual De Mascotas">
			    </div>			    

			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Anterior</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Siguiente</span>
			  </a>
			</div>


		</section>
		








		<!-- Libreria jQuery requerida por los plugins de JavaScript -->
		<script src="assets/js/jquery-3.6.0.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>

	</body>

</html>