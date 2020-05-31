<!doctype html>
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('bootstrap4/css/bootstrap.min.css') }}">
        <title>PDF Example Laravel</title>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                	@yield('content')
                </div>
            </div>
        </div>
    </body>
</html>