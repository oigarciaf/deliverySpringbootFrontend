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


<!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" th:href="@{/}">Spring Ecommerce</a>


      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('usuario.login') }}">Login</a>
          </li>
        </ul>
      </div>    
    </div>
  </nav>

    <br>    
    <br>
    <br>
    <div class="container" >
        <h1>Registrarme Gratis</h1>

        <form method="POST" action="{{ route('usuarios.crear.post') }}">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="text" name="password" id="password" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="direccion">Direccion:</label>
                <input type="text" name="direccion" id="direccion" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="telefono">Telefono:</label>
                <input type="tel" name="telefono" id="telefono" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="metodopago">Método de pago:</label>
                <select name="metodopago" id="metodopago" class="form-control" required>
                    <option value="" disabled selected>Seleccione un método de pago</option>
                    <option value="Tarjeta de crédito">Tarjeta de crédito</option>
                    <option value="PayPal">PayPal</option>
                    <option value="Efectivo">Efectivo</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
