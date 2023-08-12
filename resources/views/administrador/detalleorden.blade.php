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
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark"style="background-color: rgb(114, 234, 234)">

		<div class="container">
			<a class="navbar-brand" th:href="@{/administrador}">JOY Delivery</a>
		</div>

		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"  aria-expanded="false">
						ADMIN
					</a>
					<ul class="dropdown-menu" >
						<li> <a class="dropdown-item" href="{{ route('productos.crear') }}">Productos</a></li>
						<li><a class="dropdown-item" href="{{ route('administrador.usuarios') }}">Usuarios</a></li>
						<li><a class="dropdown-item" href="{{ route('administrador.ordenes') }}">Ordenes</a></li>
						<li><a class="dropdown-item" href="{{ route('usuario.login') }}">Salir</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>

      <!-- Page Content -->
      <div class="container">
  
  
        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">
          Spring eCommerce <small>Detalles</small>
        </h1>
  
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('administrador.home') }}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{ route('administrador.ordenes') }}">Ordenes</a></li>
          <li class="breadcrumb-item active">Detalle de orden </li>
        </ol>
  
        <!-- Blog Post -->
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
             <div class="col-lg-12">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Producto</th>                  
                    <th scope="col">Precio</th>
                    <th scope="col">Total</th>                  
                  </tr>
                </thead>
                <tbody>
                  <tr th:each="detalle:${detalles}">
                    <td th:text="${detalle.cantidad}"></td>
                    <td th:text="${detalle.nombre}"></td>
                    <td th:text="${detalle.precio}"></td>
                    <td th:text="${detalle.total}"></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container -->
  
    <!-- Footer -->
      <footer class="py-5 bg-dark">
		<div class="container">
			<p class="m-0 text-center text-white">Copyright &copy; JOY
        lenguajes 2023</p>
		</div>
		<!-- /.container -->
	</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

  
  
    
</body>
</html>