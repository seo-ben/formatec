<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('assets/librairie/image/formatac.ico') }}" type="image/x-icon">
    <title>{{ config('app.name') }}  @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/librairie/bootstrap/css/bootstrap-utilities.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/librairie/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesom/all.min.css') }}">
    <script src="{{ asset('assets/fontawesom/all.min.js') }}"></script>
    <script src="{{ asset('assets/fontawesom/icons.json') }}"></script>
    <script src="{{ asset('assets/librairie/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/librairie/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('assets/librairie/bootstrap/js/bootstrap.bundle.js') }}"></script>
</head>
<body>
  
        @include('nav.nav')
      @yield('contenu') 
     
   <div class=" footer" id="footer">
    @include('footer')
  
   </div>
</body>
</html>