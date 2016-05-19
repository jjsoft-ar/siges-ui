<title>@yield('pageTitle')</title>
<!-- Bootstrap core CSS -->
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('fonts/css/font-awesome.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">
@yield('styles')
<link href="{{asset('vendor/image-manager/css/imagemanager.css')}}" rel="stylesheet">
<link href="{{asset('vendor/image-manager/vendors/colorbox/colorbox.css')}}" rel="stylesheet">
<!--[if lt IE 9]>
<script src="../assets/js/ie8-responsive-file-warning.js"></script>
<![endif]-->

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<script>
    var GLOBALS = {
        site_url: '{{url()}}',
        datablesLang: '//cdn.datatables.net/plug-ins/1.10.7/i18n/Spanish.json',
        token: "{{csrf_token()}}"
    };
</script>