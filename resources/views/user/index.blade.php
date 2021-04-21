<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col mt-5" >
            <a href="{{url('usuarios/crear')}}" class="btn btn-success mb-3">Crear un nuevo usuario</a>
            <table class="table table-dark table-hover">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">APELLIDO</th>
                    <th scope="col">CORREO </th>
                    <th scope="col">OPCIONES </th>

                </tr>
                </thead>
                <tbody>
                    <!-- usamos el foreash para recorrer el json dato por dato -->
                    @foreach($users as $user)
                        <tr>
                            <!-- lo que esta en llaves es para imprimir la variable $user en la posicion id-->
                            <td>{{$user-> id}}</td>
                            <td>{{$user-> name}}</td>
                            <td>{{$user-> lastname}}</td>
                            <td>{{$user-> email}}</td>
                            <td >
                                <!--mandamos la ruta especifica para ese boton y la variable id-->
                                <a href="{{url('usuarios', $user->id)}}" class="btn btn-sm btn-info">Detalles</a>
                                <a href="" class="btn btn-sm btn-warning">Editar</a>
                                <a href="" class="btn btn-sm btn-danger">Eliminar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div style="text-align: center">
                {{$users->links()}}
            </div>

        </div>
    </div>
</div>

</body>
</html>
