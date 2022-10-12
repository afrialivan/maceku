<!doctype html>
<html lang="en">


<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="css/home.css">

	<title>Maceku | Beranda</title>
</head>

<body style="overflow-x: hidden;">

	<!-- navbar -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-danger sticky-top">
		<div class="container">
			<a class="navbar-brand" href="#">Maceku</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
				aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="#">Beranda</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Promo</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
							aria-expanded="false">
							Menu
						</a>
						<ul class="dropdown-menu dropdown-menu-dark " aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item" href="#">Nasi Kotak</a></li>
							<li><a class="dropdown-item" href="#">Snack</a></li>
							<li>
								<hr class="dropdown-divider">
							</li>
							<li><a class="dropdown-item" href="#">Lainnya</a></li>
						</ul>
					</li>
				</ul>
				<ul class="navbar-nav ms-auto">
					<li class="nav-item">
						<a href="" class="nav-link active">Register</a>
					</li>
					<li class="nav-item">
						<a href="" class="btn btn-light text-danger">Login</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- end nav -->

	<!-- caraosel -->
	<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
				aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
				aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
				aria-label="Slide 3"></button>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="https://images.unsplash.com/photo-1531970754732-cb09a8c4b0f5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h5>First slide label</h5>
					<p>Some representative placeholder content for the first slide.</p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="img/carousel" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h5>Second slide label</h5>
					<p>Some representative placeholder content for the second slide.</p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="https://images.unsplash.com/photo-1523145149804-5d8e0c044753?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h5>Third slide label</h5>
					<p>Some representative placeholder content for the third slide.</p>
				</div>
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>
	<!-- end caraosel -->

	<!-- judul -->
	<div class="judul w-100 text-center bg-danger p-3 mb-5">
		<h1 class="text-light">Pilihan Catering</h1>
	</div>
	<!-- end judul -->

	<!-- card -->
	<div class="container-fluid mb-5">
		<div class="row mb-4">
			<div class="col-lg-3">
				<div class="card">
					<img class="card-img-top" src="img/carousel" alt="Title">
					<div class="card-body">
						<h4 class="card-title">Title</h4>
						<p class="card-text">Text</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="card">
					<img class="card-img-top" src="img/carousel" alt="Title">
					<div class="card-body">
						<h4 class="card-title">Title</h4>
						<p class="card-text">Text</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="card">
					<img class="card-img-top" src="img/carousel" alt="Title">
					<div class="card-body">
						<h4 class="card-title">Title</h4>
						<p class="card-text">Text</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="card">
					<img class="card-img-top" src="img/carousel" alt="Title">
					<div class="card-body">
						<h4 class="card-title">Title</h4>
						<p class="card-text">Text</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row mb-4">
			<div class="col-lg-3">
				<div class="card">
					<img class="card-img-top" src="img/carousel" alt="Title">
					<div class="card-body">
						<h4 class="card-title">Title</h4>
						<p class="card-text">Text</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="card">
					<img class="card-img-top" src="img/carousel" alt="Title">
					<div class="card-body">
						<h4 class="card-title">Title</h4>
						<p class="card-text">Text</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="card">
					<img class="card-img-top" src="img/carousel" alt="Title">
					<div class="card-body">
						<h4 class="card-title">Title</h4>
						<p class="card-text">Text</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="card">
					<img class="card-img-top" src="img/carousel" alt="Title">
					<div class="card-body">
						<h4 class="card-title">Title</h4>
						<p class="card-text">Text</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<footer class="text-center bg-danger p-4 text-light">
		by Afrial Ivan Pratama
	</footer>

	<!-- Option 1: Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
		crossorigin="anonymous"></script>

</body>

</html>