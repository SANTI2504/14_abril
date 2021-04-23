<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Listado de usuarios</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col mt-5" >
            <!-- condicional para uue aparezca la alerta-->
            @if (session('status'))
                <!-- alerta -->
                <div class="alert alert-{{session('type')}}" role="alert">
                    <!-- para que imprima el mensaje-->
                    {{session('status')}}
                </div>
            @endif
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

                                <!-- fromulario para poder hacer uso de las funciones -->
                                <!-- action va tener una url con su respectivo parametro  -->
                                <!-- se usa metodo POST ya que el navegador no soporta em metodo DELETE  -->
                                <form action="{{url('usuarios',$user->id)}}" method="POST" >
                                    <!-- se crea el metodo DELETE de esta forma para que pueda hacer uso de ello en el metodo POST  -->
                                    @method('DELETE')
                                    <!-- se genera el token para poder realizar la solicitud-->
                                    @csrf
                                    <!--mandamos la ruta especifica para ese boton y la variable id-->
                                    <a href="{{url('usuarios', $user->id)}}" class="btn btn-sm btn-info">Detalles</a>
                                    <a href="{{url('usuarios/editar', $user -> id)}}" class="btn btn-sm btn-warning">Editar</a>
                                    <button type="submit" class="btn btn-danger btn-sm" >Eliminar</button>
                                </form>
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
