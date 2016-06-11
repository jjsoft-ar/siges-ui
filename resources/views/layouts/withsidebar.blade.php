<!DOCTYPE html>
<html lang="es" ng-app="Siges">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @include('sigesui::partials.meta')
    </head>
    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    @include('sigesui::partials.sidebar')
                </div>
                <!-- top navigation -->
                <div class="top_nav">
                    @include('sigesui::partials.nav')
                </div>
                <!-- /top navigation -->
                <!-- page content -->
                <div class="right_col" role="main">
                    <!-- ppal content -->
                    @include('sigesui::partials.ppal_content')
                    <!-- /ppal content -->

                    <!-- footer content -->
                    @include('sigesui::partials.footer_content')
                    <!-- /footer content -->
                </div>
                <!-- /page content -->

            </div>
        </div>

        @include('sigesui::partials.footer_meta')
    </body>
</html>
