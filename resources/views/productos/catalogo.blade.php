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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-color: rgb(114, 234, 234)">
        <div class="container">
            <a class="navbar-brand" th:href="@{/administrador}">JOY Delivery</a>
        </div>
    </nav>
    <br>
    <div class="container">
        <h1>Catalogo</h1>
        <br>
        <h2>Lo mejor a tu alcanze</h2>
        <div class="row">
            @foreach ($productos as $producto)
                <div class="col-md-4 mb-4">
                    <button type="button" class="btn btn-light shadow-sm" style="width: 250px" data-bs-toggle="modal" data-bs-target="#modal{{ $producto['id'] }}">
                        <img src="{{ asset('imagenes/' . $producto['imagen']) }}" alt="{{ $producto['nombre'] }}" style="max-width: 100px;">
                        <h5>{{ $producto['nombre'] }}</h5>
                    </button>
                    <div class="modal fade" id="modal{{ $producto['id'] }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">{{ $producto['nombre'] }}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="{{ asset('imagenes/' . $producto['imagen']) }}" alt="{{ $producto['nombre'] }}" style="max-width: 100px;">
                                    <p>{{ $producto['descripcion'] }}</p>
                                    <p>Precio: Lps.{{ $producto['precio'] }}</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    <button type="button" class="btn btn-primary">Añadir al carrito</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
