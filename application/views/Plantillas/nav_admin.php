
		<!-- Barra de Navegacion-->
			
			<header>
				<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
				  <a class="navbar-brand" href="<?php echo base_url('index_admin') ?>  ">
					<img src="assets/img/Patitas-logo.png" width="150" height="60" alt="Patitas-logo">
				  </a>

				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>

				  </button>

				  <div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
					

					  <li class="nav-item ">
						<a  class="nav-link pr-2 text-primary font-weight-bold" href="<?php echo base_url("el_catalogo") ?>">Ver Productos</a>
					  </li>

					  <li class="nav-item ">
						<a class="nav-link pr-3 text-primary font-weight-bold" href="<?php echo base_url('adm_agregar') ?>">Ingresar producto</a>
					  </li>

					  <li class="nav-item ">
						<a class="nav-link pr-2 text-primary font-weight-bold" href="<?php echo base_url('adm_gestion') ?>">Gestion de productos</a>
					  </li>


					  <li class="nav-item ">
						<a class="nav-link pr-2 text-primary font-weight-bold" href="<?php echo base_url('adm_ventas') ?>">Ver ventas</a>
					  </li>

					  <li class="nav-item ">
						<a class="nav-link pr-2 text-primary font-weight-bold" href="<?php echo base_url('adm_mensajes') ?>">Ver mensajes</a>
					  </li>

					  <li class="nav-item ">
						<a  class="nav-link pr-2 text-primary font-weight-bold" href="<?php echo base_url("adm_clientes") ?>">Ver clientes</a>
					  </li>					  

					  <li class="nav-item text-success">
							<a class="nav-link pr-2 text-primary font-weight-bold" href="">Hola <?php echo $this->session->userdata('nombre'); ?>!</a>
						</li>

						<li class="nav-item PR">
							<a class="nav-link pr-2 text-primary font-weight-bold" href="<?php echo base_url('cerrar_sesion') ?>">| Salir |  </a>
						</li>

					</ul>
				  </div>
				</nav>			

			</header>