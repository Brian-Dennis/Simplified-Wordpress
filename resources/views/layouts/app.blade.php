<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>BP Website</title>
    <link rel="stylesheet" href="https://bootswatch.com/journal/bootstrap.min.css">
  </head>
  <body>
    @include('inc.navbar')

    <div class="container">
      @yield('content')
    </div>
  </body>
</html>
