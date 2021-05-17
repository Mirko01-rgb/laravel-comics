<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Teen Titans</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
  </head>
  <body>

    @include('components.header')
    @yield('content')
    @include('components.footer')
    {{-- <img src="{{ asset('/storage/assets/jumbotron.jpg') }}" alt=""> --}}

  </body>
</html>
