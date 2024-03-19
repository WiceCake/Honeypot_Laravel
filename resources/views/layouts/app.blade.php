<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{asset('/storage/assets/web_icon.png')}}" />
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Bootstrap --}}
    <link rel="stylesheet" href="{{asset('/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('/fontawesome/css/all.min.css')}}">

    {{-- Jquery --}}
    
    <script src="{{asset('/vendor/jquery-3.6.0.min.js')}}"></script>


</head>
<body class="bg-light">

    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')

    <script src="{{asset('/bootstrap/bootstrap.bundle.min.js')}}"></script>

</body>
</html>
