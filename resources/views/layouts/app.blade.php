<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{asset('/storage/assets/web_icon.png')}}" />
    <title>@yield('title')</title>

    {{-- Bootstrap --}}
    <link rel="stylesheet" href="{{asset('/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('/fontawesome/css/all.min.css')}}">

</head>
<body>

    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')

    <script src="{{asset('/bootstrap/bootstrap.bundle.min.js')}}"></script>

</body>
</html>
