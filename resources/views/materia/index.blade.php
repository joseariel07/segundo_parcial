<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Materia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</head>
<body>
    <div class="col-md-12 my-3">
        <center><h3>LISTADO DE MATERIAS</h3></center>
    </div>
    <div class="container">
        <table class="table table-striped table-hover">
            <thead>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>ESTADO</th>
                <th>FECHA DE CREACION</th>
            </thead>
            <tbody>
                @foreach ( $materias as $item )
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->state ? 'Activo' : 'Inactivo'}}</td>
                        <td>{{$item->created_at}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>