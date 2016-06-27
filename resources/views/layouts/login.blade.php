<!DOCTYPE html>
<html lang="es" ng-app="SiGEs">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('pageTitle')</title>
        <!-- Bootstrap -->
        <link href="{!! asset('assets/css/bootstrap.min.css') !!}" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="{!! asset('assets/fonts/css/font-awesome.min.css') !!}" rel="stylesheet">
        <!-- Animate.css -->
        <link href="{!! asset('assets/css/animate.min.css') !!}" rel="stylesheet">
    
        <!-- Custom Theme Style -->
        <link href="{!! asset('assets/css/custom.min.css') !!}" rel="stylesheet">
    </head>
    <body class="login login-page">
        <div>
            @yield('content')
        </div>
        @include('sigesui::partials.footer_meta')
    </body>
</html>
