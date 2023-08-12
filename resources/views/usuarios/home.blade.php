<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
		<div class="container">
			<a class="navbar-brand" th:href="@{/}">Spring eCommerce</a>

			<form class="form-inline my-2 my-lg-0" method="post" th:action="@{/search}">
				<input class="form-control mr-sm-2" type="search"
					placeholder="Buscar" aria-label="Search" name="nombre"
					autocomplete="off">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
			</form>


			<button class="navbar-toggler" type="button" data-toggle="collapse"
				data-target="#navbarResponsive" aria-controls="navbarResponsive"
				aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item dropdown"><a
							class="nav-link dropdown-toggle" href="#"
							id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"
							aria-haspopup="true" aria-expanded="false"> USER </a>
							
							<div class="dropdown-menu"
								aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item" th:href="@{/usuario/compras}">Compras</a>
								<a class="dropdown-item" th:href="@{/getCart}">Carrito</a> 
								<a class="dropdown-item" th:href="@{/usuario/cerrar}">Salir</a> 
							</div></li>
				</ul>
			</div>
		</div>
	</nav>

    <!-- Page Content -->
	<div class="container">

		<!-- Jumbotron Header -->
		<header class="jumbotron my-4">
			<h1 class="display-3">Bienvenido a Spring Ecommerce 2021</h1>
			<p class="lead">Tu tienda de productos en Línea</p>
		</header>

		<!-- Page Features -->
		<div class="row text-center">

			<div class="col-lg-3 col-md-6 mb-4" th:each="producto: ${productos}">
				<div class="card h-100">
					<img class="card-img-top"
						th:src="@{/images/{img} (img=${producto.imagen})} " alt="">
					<div class="card-body">
						<p class="card-text" th:text="${producto.nombre}"></p>
					</div>
					<div class="card-footer">
						<a th:href="@{/productohome/{id}  (id=${producto.id})  }" class="btn btn-success">Ver
							producto</a>
					</div>
				</div>
			</div>

		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->






















    <div th:fragment="footer">
		<footer class="py-5 bg-dark">
			<div class="container">
				<p class="m-0 text-center text-white">Copyright &copy; JOY
					lenguajes 2023</p>
			</div>
			<!-- /.container -->
		</footer>

	</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>