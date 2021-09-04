<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Detalles</title>
</head>
<body>
<nav class="navbar navbar-light" style="background-color: #e3f2fd">
    <div class="container">
        <span class="navbar-brand mb-0 h1 "><h2>Detalles Producto</h2></span>
    </div>
</nav>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="bg-light p-5 rounded">
                <table class="table">
                    <hr>
                    <tr>
                        <td><strong>NOMBRE</strong></td>
                        <td>{{$products->name}}</td>
                    </tr>
                    <tr>
                        <td><strong>DESCRIPCIÓN</strong></td>
                        <td>{{$products->description}}</td>
                    </tr>
                    <tr>
                        <td><strong>PRECIO</strong></td>
                        <td>{{$products->price}}</td>
                    </tr>
                    <tr>
                        <td><strong>IMAGEN</strong></td>
                        <td>{{$products->image}}</td>
                    </tr>
                    <tr>
                        <td><strong>ID_COMPAÑIA</strong></td>
                        <td>{{$products->company_id}}</td>
                    </tr>
                </table>
                <hr>
                <a href="{{url('products')}}" class="btn btn-secondary">Ir al inicio</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>

