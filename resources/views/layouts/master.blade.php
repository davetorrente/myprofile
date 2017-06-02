<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{URL::to('src/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::to('src/css/main.css')}}">


</head>
<body>
    <div class="container-fluid" id="mainDiv">
        @include('includes.header')
        @yield('content')

    </div>
    @include('includes.footer')
    <script type="text/javascript" src="{{URL::to('src/js/jquery-3.1.2.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('src/js/bootstrap.min.js')}}"></script>

    <script type="text/javascript" src="{{URL::to('src/js/jquery-migrate-3.0.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('src/js/main.js')}}"></script>

</body>


</html>