<div class="left_col scroll-view">

    <div class="navbar nav_title" style="border: 0;">
        <a href="{{url('dashboard.inicio')}}" class="site_title">{{config('app.app_name')}}</a>
    </div>

    <div class="clearfix"></div>

    <!-- menu prile quick info -->
    <div class="profile"><!--img_2 -->
        <div class="profile_pic">
            <img src="{{Auth::user()->getAvatarImageUrl()}}" alt="{{Auth::user()->name}}" class="img-circle profile_img">
        </div>
        <div class="profile_info">
            <p>{{Auth::user()->name}}</p>
            <a href="{{route('user.profile', Auth::user()->uuid)}}"><i class="fa fa-arrow-right"></i> Mi Perfil</a>
        </div>
    </div>
    <!-- /menu prile quick info -->

    <br />

    <!-- sidebar menu -->
    <div class="clearfix"></div>
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

        {!! MenuPing::render('sidebar') !!}
        {!! MenuPing::render('config') !!}
    </div>
    <!-- /sidebar menu -->

    <!-- menu footer buttons -->
    <div class="sidebar-footer hidden-small">
        <a data-toggle="tooltip" data-placement="top" title="Settings">
            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="Lock">
            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="Logout">
            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
        </a>
    </div>
    <!-- /menu footer buttons -->
</div>
