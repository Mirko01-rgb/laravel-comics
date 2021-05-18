<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Teen Titans</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

  </head>
  <body>

    @include('components.header')
    @yield('content')
    @include('components.footer')
    {{-- <img src="{{ asset('/storage/assets/jumbotron.jpg') }}" alt=""> --}}

  </body>
</html>
