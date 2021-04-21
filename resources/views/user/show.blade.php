<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6 mt-5">

            <table class="table table-striped table-bordered ">
                <tr class="text-center">
                    <td scope="row" colspan="2" class="table-primary "><strong>DATOS PERSONALES</strong></td>

                </tr>
                <tr>
                    <th >NOMBRE</th>
                    <td>{{$user->name}}</td>
                </tr>
                <tr>
                    <th scope="row">APELLIDO</th>
                    <td>{{$user->lastname}}</td>
                </tr>
                <tr>
                    <th scope="row">CORREO</th>
                    <td>{{$user->email}}</td>
                </tr>

            </table>
            <!--generamos una url para redirecionarlo a la ruta especifica -->
            <a href="{{url('usuarios')}}">volver al inicio</a>

        </div>
    </div>
</div>

</body>
</html>
