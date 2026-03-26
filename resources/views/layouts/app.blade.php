<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $title ?? 'Advanced Hospital' }}</title>
  <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
</head>
<body>
  <header class="site-header">
    <div class="container nav">
      @include('components.navbar')
    </div>
  </header>

  <main>
    @yield('content')
  </main>

  @include('components.footer')

  <script src="{{ asset('js/landing.js') }}"></script>
</body>
</html>


