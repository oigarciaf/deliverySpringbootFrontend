<!DOCTYPE html>
<html>
<head>
    <title>Crear Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar bg-body-tertiary fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Offcanvas navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                        <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                    </li>
                </ul>
                <form class="d-flex mt-3" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                </div>
            </div>
        </div>
    </nav>
    <br>
    <br>
    <br>
    <div class="container" >
        <h1>Crear Producto</h1>

        <form method="POST"  action="{{ route('productos.crear.post') }}">
            @csrf
            <div class="form-group">
                <label for="descripcion">Descripcion:</label>
                <input type="text" name="descripcion" id="descripcion" value="{{$direccion['descripcion']}}" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="cordenadas">Cordenadas:</label>
                <input type="text" name="cordenadas" id="cordenadas" value="{{$direccion['cordenadas']}}" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="km">Kilometros:</label>
                <input type="text" name="km" id="km" value="{{$direccion['km']}}" class="form-control" pattern="\d+(\.\d+)?" title="Ingresa un número válido (ej: 10.99)" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>

        <h2>Listado de Productos</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Descripcion</th>
                    <th>Cordenadas</th>
                    <th>Kilmetros</th>
                    <th>Accion</th>
                    <th>Accion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($direcciones as $direccion)
                    <tr>
                        <td>{{ $direccion['id'] }}</td>
                        <td>{{ $direccion['descripcion'] }}</td>
                        <td>{{ $direccion['cordenadas'] }}</td>
                        <td>{{ $direccion['km'] }}<td>
                        <td>
                            <a href="{{ route('direcciones.ver', $direccion['id']) }}" class="btn btn-warning">Modificar</a>
                        </td>
                        <td>
                            <a href="{{ route('direcciones.eliminar', $direccion['id']) }}" class="btn btn-danger">Eliminar</a>
                        </td>                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
