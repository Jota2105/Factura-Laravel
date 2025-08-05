<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'Mi Aplicacion')</title>
  <!--Creamos este layout para implementar bootstrap de manera local -->
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
  @yield('content')

  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
