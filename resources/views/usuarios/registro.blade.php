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
			<a class="navbar-brand" th:href="@{/}">Spring Ecommerce</a>


			<button class="navbar-toggler" type="button" data-toggle="collapse"
				data-target="#navbarResponsive" aria-controls="navbarResponsive"
				aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a class="nav-link" th:href="@{/usuario/login}">Login</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>


	<!-- Page Content -->
	<div class="container">

		<div class="card mb-3">
			<div class="row no-gutters">
				<div class="col-md-4"></div>
				<div class="col-md-8">
					<div class="card-body">
						<h2>Registro</h2>

					</div>
				</div>
			</div>
		</div>
		<form th:action="@{/usuario/save}" method="post">
			<div class="form-group">
				<label for="nombres">Nombres:</label> <input type="text"
					class="form-control" id="nombre" name="nombre" required
					placeholder="Ingrese sus nombres" autocomplete="off">
			</div>

			<div class="form-group">
				<label for="email">Email:</label> <input type="email"
					class="form-control" id="email" name="email" required
					placeholder="Ingrese su email" autocomplete="off">
			</div>

			<div class="form-group">
				<label for="direccion">Dirección:</label> <input type="text"
					class="form-control" id="direccion" name="direccion" required
					placeholder="Ingrese su dirección" autocomplete="off">
			</div>

			<div class="form-group">
				<label for="pwd">Contraseña</label> <input type="password"
					class="form-control" id="password" name="password" required
					placeholder="Ingrese su contraseña" autocomplete="off">
			</div>
			<div class="col-sm-2">
				<button type="submit" class="btn btn-success">Guardar</button>
			</div>
		</form>

	</div>

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