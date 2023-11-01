<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>
			Home
		</title>
		<style type="text/css">
			body{
				background-color: color(srgb 0.8195 0.8196 0.8111);
			}
			.sidebar{

			}
		</style>
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
	</head>
	<body>

		<div class="main">
			
			<div class="container-fluid">
				
				<div class="row">
					<div class="col-2  p-0" >
						<div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark min-vh-100 sticky-top" style="">
						    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
						      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
						      <span class="fs-4">Sidebar</span>
						    </a>
						    <hr>
						    <ul class="nav nav-pills flex-column mb-auto">
						      <li class="nav-item">
						        <a href="#" class="nav-link active" aria-current="page">
						          <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
						          Home
						        </a>
						      </li>
						      <li>
						        <a href="#" class="nav-link text-white">
						          <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
						          Dashboard
						        </a>
						      </li>
						      <li>
						        <a href="#" class="nav-link text-white">
						          <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
						          Orders
						        </a>
						      </li>
						      <li>
						        <a href="#" class="nav-link text-white">
						          <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
						          Products
						        </a>
						      </li>
						      <li>
						        <a href="#" class="nav-link text-white">
						          <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
						          Customers
						        </a>
						      </li>
						    </ul>
						    <hr>
						    <div class="dropdown">
						      <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
						        <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
						        <strong>mdo</strong>
						      </a>
						      <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
						        <li><a class="dropdown-item" href="#">New project...</a></li>
						        <li><a class="dropdown-item" href="#">Settings</a></li>
						        <li><a class="dropdown-item" href="#">Profile</a></li>
						        <li><hr class="dropdown-divider"></li>
						        <li><a class="dropdown-item" href="#">Sign out</a></li>
						      </ul>
						    </div>
						</div>
					</div>
					<div class="col-10  p-0">
						
						<nav class="navbar bg-dark navbar-expand-lg sticky-top" data-bs-theme="dark" >
						  <div class="container-fluid">
						    <a class="navbar-brand" href="#">Navbar scroll</a>
						    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
						      <span class="navbar-toggler-icon"></span>
						    </button>
						    <div class="collapse navbar-collapse" id="navbarScroll">
						      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
						        <li class="nav-item">
						          <a class="nav-link active" aria-current="page" href="#">Home</a>
						        </li>
						        <li class="nav-item">
						          <a class="nav-link" href="#">Link</a>
						        </li>
						        <li class="nav-item dropdown">
						          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						            Link
						          </a>
						          <ul class="dropdown-menu">
						            <li><a class="dropdown-item" href="#">Action</a></li>
						            <li><a class="dropdown-item" href="#">Another action</a></li>
						            <li><hr class="dropdown-divider"></li>
						            <li><a class="dropdown-item" href="#">Something else here</a></li>
						          </ul>
						        </li>
						        <li class="nav-item">
						          <a class="nav-link disabled" aria-disabled="true">Link</a>
						        </li>
						      </ul>
						      <form class="d-flex" role="search">
						        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
						        <button class="btn btn-outline-success" type="submit">Search</button>
						      </form>
						      <div class="dropdown m-1">
							      <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
							        <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
							        <strong>mdo</strong>
							      </a>
							      <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
							        <li><a class="dropdown-item" href="#">New project...</a></li>
							        <li><a class="dropdown-item" href="#">Settings</a></li>
							        <li><a class="dropdown-item" href="#">Profile</a></li>
							        <li><hr class="dropdown-divider"></li>
							        <li><a class="dropdown-item" href="#">Sign out</a></li>
							      </ul>
							    </div>
						    </div>
						  </div>
						</nav>

						<!-- CONTENIDO -->
						<div class="container p-4">
							<div class="row">  

								<div class="card col-3" style="">
									  <img src="https://ui-avatars.com/api/?size=256" class="card-img-top" alt="...">
									  <div class="card-body">
									    <h5 class="card-title">Card title</h5>
									    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									    <a href="#" class="btn btn-primary">Go somewhere</a>
									  </div>
								</div> 

								<div class="card col-3" style="">
									  <img src="https://ui-avatars.com/api/?size=256" class="card-img-top" alt="...">
									  <div class="card-body">
									    <h5 class="card-title">Card title</h5>
									    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									    <a href="#" class="btn btn-primary">Go somewhere</a>
									  </div>
								</div>

								<div class="card col-3" style="">
									  <img src="https://ui-avatars.com/api/?size=256" class="card-img-top" alt="...">
									  <div class="card-body">
									    <h5 class="card-title">Card title</h5>
									    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									    <a href="#" class="btn btn-primary">Go somewhere</a>
									  </div>
								</div>

							</div>
						</div>
						
					</div>
				</div>

			</div>

		</div>

		<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
	</body>
</html>