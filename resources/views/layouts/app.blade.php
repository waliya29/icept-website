<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')- ICEPT</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <header>
      @include('inc.navbar')
    </header>
    <section class="container">
      @yield('content')
      
    </section>

    <footer id="footer" class="text-center">Copyright &copy; icept 2017</footer>
  </body>
</html>
