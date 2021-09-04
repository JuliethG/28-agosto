<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Registrar</title>
</head>
<body>
<!-- navbar -->
<nav class="navbar navbar-light" style="background-color: #e3f2fd">
<div class="container-md">
    <span class="navbar-brand mb-0 h1"><h2>Registrar Producto</h2></span>
</div>
</nav>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <form action="{{route('products.store')}}" method="post">
                @csrf
            <div class="form-group">
                <label for=""><strong>Nombre</strong></label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group">
                <label for=""><strong>Descripción</strong></label>
                <input type="text" class="form-control" name="description">
            </div>
            <div class="form-group">
                <label for=""><strong>Precio</strong></label>
                <input type="text" class="form-control" name="price">
            </div>
            <div class="form-group">
                <label for=""><strong>URL Imagen</strong></label>
                <input type="text" class="form-control" name="image">
            </div>
            <div class="form-group">
                <label for=""><strong>Compañia</strong></label>
                <input type="text" class="form-control" name="company_id">
            </div>
            <hr>
            <div class="form-group">
                <button class="btn btn-success">Registrar Nuevo Producto</button>
                <a href="{{url('products')}}" class="btn btn-danger">Cancelar</a>
            </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>


