<!doctype html>
<html lang="en">
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/mdb.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/coustom.css')}}">
    <link href=" {{asset('css/responsive.css')}} " rel="stylesheet">
    <link href=" {{asset('css/owl.carousel.min.css')}} " rel="stylesheet">
    <link href=" {{asset('css/fontawesome.css')}} " rel="stylesheet">
    <link href=" {{asset('css/animate.css')}} " rel="stylesheet">

    <title>Hello, world!</title>
</head>
<body>
    @include('Layout.Nav')
    @yield('content')



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="{{asset('js//jquery-3.5.1.slim.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/popper.min.js')}}" ></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/Coustom.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script type="text/javascript" src=" {{asset('js/axios.min.js')}} "></script>

    @yield('script')
</body>
</html>
