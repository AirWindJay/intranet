
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Intranet</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    
  </head>

  <body class="bg-light">

        <main id="main" class="py24" style="">
            @yield('content')
        </main>
    
        <script src="{{ asset('js/jquery.min.js') }}"></script>
    </body>
</html>
