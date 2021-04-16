<!doctype html>
<html lang="en">
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
        <div class="col mt-5 " >
            <table class="table table-success table-hover table-bordered align-middle">
                <thead>
                <tr class="text-center">
                    <th class="col-1 " scope="col">ID</th>
                    <th class="col-3" scope="col">EMPRESA</th>
                    <th class="col-1" scope="col">NIT</th>
                    <th class="col-6" scope="col">DIRECCION</th>
                    <th class="col-1 " scope="col">LOGO</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($companies as $company)
                        <tr>
                            <th class="text-center" scope="row">{{$company-> id}}</th>
                            <td>{{$company-> name_company}}</td>
                            <td>{{$company-> nit}}</td>
                            <td>{{$company-> address}}</td>
                            <td ><img class="img-fluid img-thumbnail" src="{{$company-> logo}}" alt="logo"></td>
                        </tr>
                    @endforeach

                </tbody>

            </table>
            <div >
                {{$companies->links()}}
            </div>
        </div>
    </div>
</div>

</body>
</html>
