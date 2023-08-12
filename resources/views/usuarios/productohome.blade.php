<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
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
                    <li class="nav-item"><a class="nav-link" th:href="@{/getCart}">Carrito</a></li>
                    <li class="nav-item"><a class="nav-link" th:href="@{/usuario/login}">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
	<div class="container">

		<!-- Page Heading/Breadcrumbs -->
		<h1 class="mt-4 mb-3">
			Spring eCommerce <small>Producto</small>
		</h1>

		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a th:href="@{/}">Home</a></li>
			<li class="breadcrumb-item active">Producto</li>
		</ol>

		<!-- Blog Post -->
		<div class="card mb-4">
			<div class="card-body">
				<div class="row">
					<div class="col-lg-6">
						<a href="#"> <img class="img-fluid rounded"
							th:src="@{/images/{img} (img=${producto.imagen})  }" alt="">
						</a>
					</div>
					<div class="col-lg-6">
						<form th:action="@{/cart}" method="POST">
						<input type="hidden" th:value="${producto.id}" name="id">
							<h2 class="card-title" th:text="${producto.nombre}"></h2>

							<ul class="list-group">
								<li class="list-group-item"><h5 th:text=" 'Precio: '+ ${producto.precio} "></h5></li>
								<li class="list-group-item">
									<p th:text=" 'Descripción: '+ ${producto.descripcion} "></p>
								</li>
								<li class="list-group-item"><h6>
										Cantidad: <input type="number" id="cantidad" name="cantidad"
											autocomplete="off" min="1" max="5" value="1">
									</h6></li>
							</ul>


							<button type="submit" class="btn btn-dark">Añadir al
								carrito</button>

						</form>
					</div>
				</div>
			</div>
		</div>


	</div>






















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