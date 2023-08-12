<!DOCTYPE html>
<html>
<head>
    <title>Modificar Direccion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Modificar Direccion</h1>

        <form method="POST" action="{{ route('direcciones.modificar') }}">
            @csrf
            <div class="form-group">
                <label for="id">Id:</label>
                <input readonly type="text" name="id" id="id" value="{{$direccion['id']}}" class="form-control" required>
            </div>
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
            <button type="submit" class="btn btn-primary">Editar</button>
        </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>