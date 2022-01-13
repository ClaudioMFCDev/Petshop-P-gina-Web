
		<!-- Barra de Navegacion-->
			
			<header class="text-success">
				<nav class="border border-top-0 border-success navbar navbar-expand-lg navbar-dark bg-dark">
				  <a class="navbar-brand" href="<?php echo base_url() ?>  ">
					<img src="assets/img/Patitas-logo.png" width="150" height="60" alt="Patitas-logo">
				  </a>

				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>

				  </button>

				  <div class=" collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
					

					  <li class="nav-item ">
						<a  class="nav-link pr-2 text-success font-weight-bold" href="<?php echo base_url('el_catalogo') ?>"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-caret-down" viewBox="0 0 16 16">
						  <path d="M3.204 5h9.592L8 10.481 3.204 5zm-.753.659 4.796 5.48a1 1 0 0 0 1.506 0l4.796-5.48c.566-.647.106-1.659-.753-1.659H3.204a1 1 0 0 0-.753 1.659z"/>
						</svg>CATÁLOGO</a>
					  </li>	


					  <li class="nav-item px-2">
						<a  class="nav-link text-success pl-4" href="<?php echo base_url('nosotros') ?>">Quienes somos</a>
					  </li>


					  <li class="nav-item px-2">
						<a class="nav-link pr-2 text-success" href="<?php echo base_url('consultas') ?>">CONTACTO</a>
					  </li>


						<?php if( $this->session->userdata('login') ) { ?>

						<li class="nav-item text-center px-2">
							<a class="nav-link" href="<?php echo base_url('carrito') ?>"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart4 text-white" viewBox="0 0 16 16">
  							<path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
							</svg> CARRITO </a>
						</li>

						<li class="nav-item text-center text-success px-2">
							<a class="nav-link text-success font-weight-bold" href="">Hola <?php echo $this->session->userdata('nombre'); ?>!</a>
						</li>

						<li class="nav-item px-2">
							<a class="nav-link text-success" href="<?php echo base_url('cerrar_sesion') ?>">| Salir |  </a>
						</li>

					  	<?php } else { ?>

					  	<li class="nav-item pr-2">
							<a class="nav-link pr-2 font-weight-bold" href="<?php echo base_url('login') ?>">INGRESAR <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
							  <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
							  <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
							</svg> </a>
						</li>

					  
				  		<?php } ?>

					</ul>
					<form class="form-inline my-2 my-lg-0">
					  <input class="form-control mr-sm-2 font-italic" type="search" placeholder="Ingrese búsqueda" aria-label="Search">
					  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
					</form>
				  </div>
				</nav>			

			</header>