<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="{{ urL('images/favicon.png') }}">

    <title>@yield('title')</title>

    @yield('meta')

    <!-- CSS Sycipts -->
    <link href="{{ asset('css/site.css') }}" rel="stylesheet">

    <!-- JavaScript -->
    <script src="{{ asset('js/site.js') }}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

@include('partials.header')

@yield('content')

@include('partials.footer')

<!-- Scripts -->
@yield('scripts')

<!-- Analytics -->
@include('partials.analytics')

</body>
</html>