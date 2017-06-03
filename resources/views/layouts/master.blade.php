<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{URL::to('src/css/bootstrap.min.css')}}">
    <link href="{{URL::to('src/css/animate.css')}}" rel="stylesheet">

    <!-- THEME STYLES -->
    <link href="{{URL::to('src/css/layout.min.css')}}" rel="stylesheet" type="text/css"/>

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico"/>

    <link rel="stylesheet" href="{{URL::to('src/css/main.css')}}">





</head>
<body id="body" data-spy="scroll" data-target=".header">
        @include('includes.header')

        @yield('content')

        @include('includes.footer')

    <a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>
    <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->

    <!-- CORE PLUGINS -->
    <script type="text/javascript" src="{{URL::to('src/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('src/js/jquery-migrate.min.js')}}"></script>

    <script type="text/javascript" src="{{URL::to('src/js/bootstrap.min.js')}}"></script>

    <script type="text/javascript" src="{{URL::to('src/js/main.js')}}"></script>



    <!-- PAGE LEVEL PLUGINS -->
    <script src="{{URL::to('src/js/jquery.easing.js')}}" type="text/javascript"></script>
    <script src="{{URL::to('src/js/jquery.back-to-top.js')}}" type="text/javascript"></script>
    <script src="{{URL::to('src/js/jquery.smooth-scroll.js')}}" type="text/javascript"></script>
    <script src="{{URL::to('src/js/jquery.wow.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::to('src/js/jquery.parallax.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::to('src/js/jquery.appear.js')}}" type="text/javascript"></script>
    <script src="{{URL::to('src/js/masonry/jquery.masonry.pkgd.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::to('src/js/masonry/imagesloaded.pkgd.min.js')}}" type="text/javascript"></script>

    <!-- PAGE LEVEL SCRIPTS -->
    <script src="{{URL::to('src/js/layout.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::to('src/js/components/progress-bar.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::to('src/js/components/masonry.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::to('src/js/components/wow.min.js')}}" type="text/javascript"></script>

</body>


</html>