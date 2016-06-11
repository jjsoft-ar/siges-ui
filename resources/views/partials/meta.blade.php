<title>@yield('pageTitle')</title>
<!-- Bootstrap core CSS -->
<link href="{!! asset('assets/css/bootstrap.min.css') !!}" rel="stylesheet">
<link href="{!! asset('assets/fonts/css/font-awesome.min.css') !!}" rel="stylesheet">
<link href="{!! asset('assets/css/animate.min.css') !!}" rel="stylesheet">
<!-- Custom styling plus plugins -->
<link href="{!! asset('assets/css/custom.min.css') !!}" rel="stylesheet">
<link href="{!! asset('assets/css/icheck/flat/green.css') !!}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{!! asset('assets/css/sweetalert.css') !!}">

<script src="{!! asset('assets/js/jquery.min.js') !!}"></script>
@yield('styles')

<!--[if lt IE 9]>
<script src="{!! asset('assets/js/ie8-responsive-file-warning.js') !!}"></script>
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