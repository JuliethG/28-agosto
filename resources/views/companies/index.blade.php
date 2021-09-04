<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Compañias</title>
</head>
<body>
<!-- navbar -->
<nav class="navbar navbar-dark bg-dark" style="background-color: #e3f2fd;">
    <div class="container-md">
        <a class="navbar-brand mb-0 h1" href="companies.index">Compañias</a>
        <a class="navbar-brand mb-0 h1" href="products">Productos</a>
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>
</nav>
<br>
   <div class="container-md">
       <div class="row">
           <div class="col-md-12">
               <a href="{{route('companies.create')}}" class="btn btn-outline-dark">Registrar Nueva Compañia</a>
               <hr>
               <div class="table-responsive">
                 <table class="table table-hover">
                     <thead class="table-secondary">
                       <tr>
                           <th>ID</th>
                           <th>NOMBRE</th>
                           <th>NIT</th>
                           <th>FECHA DE CREACIÓN</th>
                           <th>FECHA DE ACTUALIZACIÓN</th>
                           <th>ACCIONES</th>
                       </tr>
                     </thead>
                     <tbody>
                     @foreach($companies as $company)
                     <tr>
                         <td>{{$company->id}}</td>
                         <td>{{$company->name}}</td>
                         <td>{{$company->nit}}</td>
                         <td>{{$company->created_at}}</td>
                         <td>{{$company->updated_at}}</td>
                         <td>
                             <a href="{{route('companies.edit',$company->id)}}" class="btn btn-sm btn-warning">EDITAR</a>
                             <a href="{{route('companies.show',$company->id)}}" class="btn btn-sm btn-info">DETALLES</a>
                             </form>
                         </td>
                     </tr>
                     @endforeach
                     </tbody>
                 </table>
                   <hr>
                   <ul class="pagination justify-content-center">
                       <li class="page-item disabled">
                       <li class="page-item"><a class="page-link" href="companies?page=1">1</a></li>
                       <li class="page-item"><a class="page-link" href="companies?page=2">2</a></li>
                       <li class="page-item"><a class="page-link" href="companies?page=3">3</a></li>
                       </li>
                   </ul>
               </div>
           </div>
       </div>
   </div>
</body>
</html>
