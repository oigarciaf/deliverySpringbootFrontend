<!-- Navigation -->

@yield('header')
<div th:fragment="header">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container">
			<a class="navbar-brand" th:href="@{/administrador}">Spring eCommerce</a>

			<form class="form-inline my-2 my-lg-0" method="post" action="#">
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
					<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> ADMIN </a>
							<div class="dropdown-menu"
								aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item" th:href="@{/productos}">Productos</a> 
								<a class="dropdown-item" th:href="@{/administrador/usuarios}">Usuarios</a>
								<a class="dropdown-item" th:href="@{/administrador/ordenes}">Ordenes</a>
								<a class="dropdown-item" th:href="@{/usuario/cerrar}">Salir</a>
							</div>
					</li>
				</ul>
			</div>
		</div>
	</nav>
</div>



@yield('footer')
<div th:fragment="footer">
	<footer class="py-5 bg-dark">
		<div class="container">
			<p class="m-0 text-center text-white">Copyright &copy; JOY
                lenguajes 2023</p>
		</div>
		<!-- /.container -->
	</footer>

</div>