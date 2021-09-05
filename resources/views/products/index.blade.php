<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Productos</title>
</head>
<body>
<!-- navbar -->
<nav class="navbar navbar-dark bg-dark" style="background-color: #e3f2fd;">
    <div class="container-md">
        <a class="navbar-brand mb-0 h1" href="companies">Compañias</a>
        <a class="navbar-brand mb-0 h1" href="products">Productos</a>
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>
</nav>
<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <a href="{{route('products.create')}}" class="btn btn-outline-dark">Registrar Nuevo Producto</a>
            @if(session('status'))
                <div class="alert alert-success mt-3">
                    {{session('status')}}
                </div>
            @endif
            <hr>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="table-secondary">
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>DESCRIPCIÓN</th>
                        <th>PRECIO</th>
                        <th>IMAGEN</th>
                        <th>COMPAÑIA</th>
                        <th>FECHA DE CREACIÓN</th>
                        <th>FECHA DE ACTUALIZACIÓN</th>
                        <th>ACCIONES</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->description}}</td>
                            <td>{{$product->price}}</td>
                            <td><img src="{{$product->image}}" width="100"></td>
                            <td>{{$product->company->name}}</td>
                            <td>{{$product->created_at}}</td>
                            <td>{{$product->updated_at}}</td>
                            <td>
                                <form action="{{route('products.destroy',$product->id)}}" method="post">
                                    @csrf
                                    @method('DElETE')
                                <div class="row">
                                <a href="{{route('products.edit',$product->id)}}" class="btn btn-sm btn-warning col-10">EDITAR</a>
                                <a href="{{route('products.show',$product->id)}}" class="btn btn-sm btn-info col-10">DETALLES</a>
                                <button class="btn btn-sm btn-danger col-10" type="submit">ELIMINAR</button>
                                </div>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <hr>
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                        <li class="page-item"><a class="page-link" href="products?page=1">1</a></li>
                        <li class="page-item"><a class="page-link" href="products?page=2">2</a></li>
                        <li class="page-item"><a class="page-link" href="products?page=3">3</a></li>
                        <li class="page-item"><a class="page-link" href="products?page=4">4</a></li>
                        </li>
                    </ul>
            </div>
        </div>
    </div>
</div>
</body>
</html>

