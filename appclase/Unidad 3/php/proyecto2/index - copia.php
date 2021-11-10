<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">	
	<title>Sitio web Responsivo</title>
	<meta name="vieport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Framework Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/micss3.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900&display=swap" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="principal">
			<!-- MENU -->
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			  	<div class="container-fluid">
			    	<a class="navbar-brand" href="">Menu:</a>
			    	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse2">
			     		<span class="navbar-toggler-icon"></span>
			   		</button>
			   		<div class="collapse navbar-collapse" id="navbarCollapse2">
			     		<ul class="navbar-nav me-auto mb-2 mb-lg-0">
			       			<li class="nav-item">
			         			<a class="nav-link active" aria-current="page" href="#">Home</a>
			       			</li>
			        		<li class="nav-item">
			          			<a class="nav-link" href="#">Link 1</a>
			        		</li>
			        		<li class="nav-item">
			          			<a class="nav-link" href="#">Link 2</a>
			        		</li>
			        		<li class="nav-item dropdown">
			          			<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
			            			Dropdown
			          			</a>
			          			<ul class="dropdown-menu">
			            			<li><a class="dropdown-item" href="#">Action</a></li>
			            			<li><a class="dropdown-item" href="#">Another action</a></li>
			            			<li><hr class="dropdown-divider"></li>
			            			<li><a class="dropdown-item" href="#">Something else here</a></li>
			          			</ul>
			        		</li>
			        		<li class="nav-item dropdown">
			          			<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
			            			Login
			          			</a>
			          			<ul class="dropdown-menu login">
			            			<li>
							  			<div class="row">
							              <div class="col-12">
							                 <form>                 
							                    <div>
							                      <label for="tlogin" class="label-login">Login via ?</label>
							                      <div class="btn-group">
							                        <a class="btn btn-primary btn-sm disabled" data-bs-toggle="tlogin">Usuario</a>
							         				</a>							                    	
							                      </div>                     
							                    </div>                  
							                    <br>
							                    <div>
							                      <img id="logo_img" class="img_logo" src="img/avatar.png" > 
							                    </div>
							                    <div class="form-group">                       
													<div style="margin-bottom: 25px" class="input-group mb-2">
														<span class="input-group-text" id="basic-addon1"><i class="fa fa-user fa-2x"></i></span>
													  	<input type="text" class="form-control" placeholder="Username">
													</div>                                                  
							                    </div>
							                    <div class="form-group">
							                       <div style="margin-bottom: 25px" class="input-group mb-2">
							                          <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock fa-2x"></i></span>                          
							                          <input type="password" class="form-control" placeholder="Password" required>
							                        </div>
							                        <div class="help-block"><a href="">Olvido su Contraseña ?</a></div>
							                    </div>
							                    <div class="form-group">
							                    	<div class="d-grid">
							                       		<button type="submit" class="btn btn-primary btn-block">Entrar</button>
							                       	</div>                       
							                    </div>                    
							                	</form>
							              	</div>              
							           	</div>
							        </li>
								</ul>
			            	</li>
			        		<li class="nav-item">
			          			<a class="nav-link disabled">Disabled</a>
			        		</li>
			      		</ul>
			      		<form class="d-flex">
			        		<input class="form-control me-2" type="search" placeholder="Search">
			        		<button class="btn btn-outline-success" type="submit">Search</button>
			      		</form>
			    	</div>
			  	</div>
			</nav>
			<!-- Seccion Principal -->
			<div class="p-4 p-md-5 mb-4 my-4 text-white bg-dark forma">
				<div class="col-12">
					<h1 class="display-4 fst-italic">El mejor servicio de Hospedaje Web</h1>
					<p class="lead my-3">Contamos con los mejores planes para todo tipo de proyectos, los planes se pueden cambiar en cualquier momento sin penalizacion alguna.</p>
					<p class="lead" align="left"><a href="#" class="text-white fw-bold">Mas informacion ...</a></p>
				</div>
			</div>
			<!-- Carousel -->
			<div id="MiCarrusel" class="carousel slide" data-bs-ride="carousel">
				<div class="carousel-indicators">
					<button type="button" data-bs-target="#MiCarrusel" data-bs-slide-to="0" class="active" aria-label="Slide 1"></button>
					<button type="button" data-bs-target="#MiCarrusel" data-bs-slide-to="1" class="active" aria-label="Slide 2"></button>
					<button type="button" data-bs-target="#MiCarrusel" data-bs-slide-to="2" class="active" aria-label="Slide 3"></button>
				</div>

				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="img/servicio.jpg">
						<div class="container">
							<div class="carousel-caption text-start">
								<div>
									<h1>Ejemplo 1</h1>
									<p>El mejor servicio del mercado a su alcance</p>
								</div>
								<p><a href="#" class="btn btn-sm btn-primary">Mas Informacion</a></p>
							</div>
						</div>
					</div>

					<div class="carousel-item">
						<img src="img/precio.jpg">
						<div class="container">
							<div class="carousel-caption">
								<div>
									<h1>Ejemplo 2</h1>
									<p>Los mejores precios del mercado</p>
								</div>
								<p><a href="#" class="btn btn-sm btn-primary">Mas Informacion</a></p>
							</div>
						</div>
					</div>

					<div class="carousel-item">
						<img src="img/tecnologia.jpg">
						<div class="container">
							<div class="carousel-caption text-end">
								<div>
									<h1>Ejemplo 3</h1>
									<p>Lo ultimo en tecnologia web, las mas completas y actualizadas herramientas para la construccion de contenido web, incluidas en el precio.</p>
								</div>
								<p><a href="#" class="btn btn-sm btn-primary">Mas Informacion</a></p>
							</div>
						</div>
					</div>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#MiCarrusel" data-bs-slide="prev">
					<span class="carousel-control-prev-icon"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#MiCarrusel" data-bs-slide="next">
					<span class="carousel-control-next-icon"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>
			<!-- Fichas -->
			<div class="row justify-content-center">
				<div class="col-12 col-sm-6 col-md-4 col-lg-3">
					<div class="tabla-precio">
						<div>
							<span class="titulo fondo-bk-t">Basico</span>
							<span class="precio fondo-bk">Precio: $350.00/mes</span>
							<span class="servicios">Servicios: </span>
						</div>
						<div>
							<ul>
								<li>Nombre de Dominio</li>
								<li>Redes Sociales</li>
								<li>Primer Mes Gratis</li>
								<li>Servicio 24/7</li>
							</ul>
							<a href="#" class="btn btn-outline-dark">Comprar</a>
						</div>
					</div>
				</div>

				<div class="col-12 col-sm-6 col-md-4 col-lg-3">
					<div class="tabla-precio">
						<div>
							<span class="titulo fondo-gr-t">Basico +</span>
							<span class="precio fondo-gr">Precio: $550.00/mes</span>
							<span class="servicios">Servicios: </span>
						</div>
						<div>
							<ul>
								<li>Nombre de Dominio</li>
								<li>Redes Sociales</li>
								<li>Primer Mes Gratis</li>
								<li>Servicio 24/7</li>
							</ul>
							<a href="#" class="btn btn-outline-success">Comprar</a>
						</div>
					</div>
				</div>

				<div class="col-12 col-sm-6 col-md-4 col-lg-3">
					<div class="tabla-precio">
						<div>
							<span class="titulo fondo-rj-t">Intermedio</span>
							<span class="precio fondo-rj">Precio: $800.00/mes</span>
							<span class="servicios">Servicios: </span>
						</div>
						<div>
							<ul>
								<li>Nombre de Dominio</li>
								<li>Redes Sociales</li>
								<li>Primer Mes Gratis</li>
								<li>Servicio 24/7</li>
							</ul>
							<a href="#" class="btn btn-outline-danger">Comprar</a>
						</div>
					</div>
				</div>

				<div class="col-12 col-sm-6 col-md-4 col-lg-3">
					<div class="tabla-precio">
						<div>
							<span class="titulo fondo-az-t">Plus</span>
							<span class="precio fondo-az">Precio: $1,200.00/mes</span>
							<span class="servicios">Servicios: </span>
						</div>
						<div>
							<ul>
								<li>Nombre de Dominio</li>
								<li>Redes Sociales</li>
								<li>Primer Mes Gratis</li>
								<li>Servicio 24/7</li>
							</ul>
							<a href="#" class="btn btn-outline-primary">Comprar</a>
						</div>
					</div>
				</div>

			</div>
			<!-- Redes Sociales -->
			<div>
				<div class="row">
					<div class="col-12 col-sm-6 col-md-4 col-lg-4">
						<div class="caja">
							<i class="fa fa-instagram fa-3x icono"></i>
							<h4>Instagram</h4>
							<div>
								<span>Aqui puedes encontrar el enlace a los comentarios realizados via <strong>Instagram</strong></span>
							</div>
							<a href="#" class="link">Acceso</a>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-md-4 col-lg-4">
						<div class="caja">
							<i class="fa fa-twitter fa-3x icono"></i>
							<h4>Twitter</h4>
							<div>
								<span>Aqui puedes encontrar el enlace a los comentarios realizados via <strong>Twitter</strong></span>
							</div>
							<a href="#" class="link">Acceso</a>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-md-4 col-lg-4">
						<div class="caja">
							<i class="fa fa-facebook fa-3x icono"></i>
							<h4>Facebook</h4>
							<div>
								<span>Aqui puedes encontrar el enlace a los comentarios realizados via <strong>Facebook</strong></span>
							</div>
							<a href="#" class="link">Acceso</a>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-md-4 col-lg-4">
						<div class="caja">
							<i class="fa fa-pinterest fa-3x icono"></i>
							<h4>Pinterest</h4>
							<div>
								<span>Aqui puedes encontrar el enlace a los comentarios realizados via <strong>Pinterest</strong></span>
							</div>
							<a href="#" class="link">Acceso</a>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-md-4 col-lg-4">
						<div class="caja">
							<i class="fa fa-google-plus fa-3x icono"></i>
							<h4>Google+</h4>
							<div>
								<span>Aqui puedes encontrar el enlace a los comentarios realizados via <strong>Google+</strong></span>
							</div>
							<a href="#" class="link">Acceso</a>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-md-4 col-lg-4">
						<div class="caja">
							<i class="fa fa-github fa-3x icono"></i>
							<h4>Github</h4>
							<div>
								<span>Aqui puedes encontrar el enlace a los comentarios realizados via <strong>Github</strong></span>
							</div>
							<a href="#" class="link">Acceso</a>
						</div>
					</div>

				</div>
			</div>


		</div>
	</div>
	<!-- Librerias JQuery -->
	<script type="text/javascript" src="css/bootstrap/js/bootstrap.bundle.js"></script>
</body>
</html>