<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Meta Information -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', config('app.name'))</title>

    <link href="{{ mix( 'css/app.css') }} " rel="stylesheet">

</head>
<body>
    <div>
        <nav class="navbar navbar-light navbar-expand-md navbar-spark">
            <div class="container"></div>
        </nav>
        <main>
            @yield('content')
        </main>
    </div>
    <script src="{{ mix( 'js/app.js') }}"></script>
</body>
</html>
