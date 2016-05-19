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
                    <div class="">
                        <div class="page-title">
                            @yield('content-header-title')
                        </div>

                        <div class="title_right">
                            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Buscar...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">Ir!</button>
                            </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Page title <small>Page subtile </small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                                <i class="fa fa-wrench"></i>
                                            </a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Settings 1</a></li>
                                                <li><a href="#">Settings 2</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <!-- content starts here -->
                                    @yield('content')
                                <!-- content ends here -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- footer content -->
                    <footer>
                        <div class="pull-right hidden-xs">
                            {{config('app.app_name')}} - <b>Version</b> {{config('app.version')}}
                        </div>
                        <strong>Copyright © {{date('Y')}}</strong>
                    </footer>
                    <!-- /footer content -->
                </div>
                <!-- /page content -->

            </div>
        </div>



        @include('sigesui::partials.footer_meta')
    </body>
</html>
