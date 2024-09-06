<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  @vite('resources/css/app.css')
</head>
<body>
  <header>
    @include('components.navbar')
  </header>
  <div class="container mt-4">
    @yield('content')
  </div>
  <footer>
    @include('components.footer')
  </footer>
</body>
</html>