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
            <div class="card border-primary mb-3">
                <div class="card-header text-white bg-primary">
                    Formulario de registro
                </div>
                <div class="card-body ">
                    <!-- el formulario se crea en metodo post ya que va a enviar datos a la bbdd -->
                    <!-- el formulario va tener una accion de url como ruta usuarios -->
                    <form action="{{url('usuarios')}}" method="post">
                        <!-- token para poder generar la solicitud -->
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Nombre</label>
                            <!-- el id y el name debe ir identico como en la base de datos -->
                            <input type="text" class="form-control" name="name" id="name" >
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Apellido</label>
                            <input type="text" class="form-control" name="lastname" id="lastname" >
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Correo electronico</label>
                            <input type="text" class="form-control" name="email" id="email" >
                        </div>
                        <hr>
                        <button class="btn btn-primary" type="submit">Guardar nuevo usuario</button>
                        <!-- para hacer una redireccion a otra pagina se debe hacer de la siguiente manera -->
                        <a href="{{url('usuarios')}}">volver al inicio</a>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
