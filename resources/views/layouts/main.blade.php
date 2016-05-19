<!DOCTYPE html>
<html lang="es" ng-app="SiGEs">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @include('sigesui::partials.meta')
    </head>
    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                @yield('content')
            </div>
        </div>
        @include('sgiesui::partials.footer_meta')
    </body>
</html>
