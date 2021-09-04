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
        <span class="navbar-brand mb-0 h1"><h2>Registrar Compañia</h2></span>
    </div>
</nav>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <form action="{{route('companies.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="">Nombre</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label for="">Nit</label>
                    <input type="text" class="form-control" name="nit">
                </div>
                <hr>
                <div class="form-group">
                    <button class="btn btn-success">Registrar Compañia</button>
                    <a href="{{url('companies')}}" class="btn btn-danger">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>


