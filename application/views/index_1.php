<!DOCTYPE html>
<html lang="en">


	<head>
		<meta charset ="utf-8">
		<meta http-equiv= "X-UA-Compatible" content= "IE=edge">
		<!-- Responsivo -->
		<meta name="viewport" content="width=device-width, inicial-scale=1,
			shrink-to-fit=no">
			
		<title>Principal</title>

		<!-- Boostrap -->

		<link rel="stylesheet" href="<?php echo base_url ()?>assets/css/bootstrap.min.css">

	</head>

	<body>

		<header>
		
			<section class="container-fliud">

				<nav class="navbar navbar-expand-lg navbar-light bg-light">
				  <a class="navbar-brand" href="#">Navbar</a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>

				  <div class="collapse navbar-collapse" id="navbarNavDropdown">

				    <ul class="navbar-nav">

				      <li class="nav-item ">
				        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				      </li>

				      <li class="nav-item">
				        <a class="nav-link" href="#">Features</a>
				      </li>

				      <li class="nav-item">
				        <a class="nav-link" href="#">Pricing</a>
				      </li>

				      <li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				          Dropdown link
				        </a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				          <a class="dropdown-item" href="#">Action</a>
				          <a class="dropdown-item" href="#">Another action</a>
				          <a class="dropdown-item" href="#">Something else here</a>
				        </div>
				      </li>

				    </ul>

				  </div>
				</nav>			
			
		</header>


		<!-- Carrousel -->
		<section>
		<header>
			
			<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
			  <div class="carousel-inner">

			    <div class="carousel-item active">
			      <img src="assets/img/adulto.jpg" class="d-block w-100" alt="Alimento Perro Adulto">
			    </div>

			    <div class="carousel-item">
			      <img src="assets/img/toys.jpg" class="d-block w-100" alt="Juguetes Caninos">
			    </div>

			    <div class="carousel-item">
			      <img src="assets/img/gatos.jpg" class="d-block w-100" alt="Casa Gato">
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


		</header>
		</section>

		<footer class="text-center">
			
			<div>
				
				<h1>Copyright 2021</h1>

			</div>

		</footer>


		<!-- Libreria jQuery requerida por los plugins de JavaScript -->		
		<script src="assets/js/jquery-3.6.0.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>



	</body>
</html>