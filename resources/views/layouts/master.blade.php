<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <!-- Bootstrap CSS-->
    <link href="{{asset('vendors/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" href="{{asset('vendors/font-awesome/css/font-awesome.min.css')}}">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!-- WARNING: Respond.js doesn't work if you view the page via file://-->
    <!-- IE 9-->
    <!-- Vendors-->
    <link rel="stylesheet" href="{{asset('vendors/flexslider/flexslider.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/swipebox/css/swipebox.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/slick/slick.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/slick/slick-theme.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/pageloading/css/component.min.css')}}">
    <!-- Font-icon-->
    <link rel="stylesheet" href="{{asset('fonts/font-icon/style.css')}}">
    <!-- Style-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/elements.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/extra.css?v=25')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/widget.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/phonecall.css')}}?v=16">
    <link id="colorpattern" rel="stylesheet" type="text/css" href="{{asset('css/color/colordefault.css?v=24')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css?v=21')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/live-settings.css')}}">
    <!-- Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700,700i&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Kalam&display=swap' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Cookie&display=swap' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Dancing+Script&display=swap' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Grenze&display=swap'  rel='stylesheet'>
    <link href='https://use.typekit.net/odj2frh.css' rel="stylesheet">
    <!-- Script Loading Page-->
    <script src="{{asset('vendors/html5shiv.js')}}"></script>
    <script src="{{asset('vendors/respond.min.js')}}"></script>
    <script src="{{asset('vendors/pageloading/js/snap.svg-min.js')}}"></script>
    <script src="{{asset('vendors/pageloading/sidebartransition/js/modernizr.custom.js')}}"></script>
    <style type="text/css">
        @font-face {
            font-family: SVN-Balladeer Light;
            src: url('{{public_path('..\fonts\SVN-BalladeerLight.tff')}}') format('tff');
        }
        @font-face {
            font-family: SVN-BalladeerLight;
            src: url('{{public_path('..\fonts\SVN-BalladeerLight.eot')}}');
            src: url('{{public_path('..\fonts\SVN-BalladeerLight.eot?#iefix')}}') format('embedded-opentype'),
            url('{{public_path('..\fonts\SVN-BalladeerLight.svg#SVN-BalladeerLight')}}') format('svg'),
            url('{{public_path('..\fonts\SVN-BalladeerLight.ttf')}}') format('tff'),
            url('{{public_path('..\fonts\SVN-BalladeerLight.woff')}}') format('woff'),
            url('{{public_path('..\fonts\SVN-BalladeerLight.woff2')}}') format('woff2');

        }

    </style>
</head>
<body>
@include('shared._header')
<hr/>
@yield('content')
<hr/>
@include('shared._footer')

</body>
</html>
