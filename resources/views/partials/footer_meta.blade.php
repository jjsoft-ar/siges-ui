<!-- Scripts -->
<script src="{!! asset('assets/js/bootstrap.min.js') !!}"></script>
<script src="{!! asset('assets/js/sweetalert.min.js') !!}"></script>
<!-- chart js -->
<script src="{!! asset('assets/js/chartjs/chart.min.js') !!}"></script>
<!-- bootstrap progress js -->
<script src="{!! asset('assets/js/progressbar/bootstrap-progressbar.min.js') !!}"></script>
<script src="{!! asset('assets/js/nicescroll/jquery.nicescroll.min.js') !!}"></script>
<!-- icheck -->
<script src="{!! asset('assets/js/icheck/icheck.min.js') !!}"></script>

<script src="{!! asset('assets/js/custom.js') !!}"></script>
@yield('scripts')
@include('sigesui::partials.core_modals')
@include('sigesui::partials.sweet-alert')
<!-- delete form for elements -->
{!! Form::open(['id' => 'deleteForm', 'method' => 'DELETE']) !!}
{!! Form::close() !!}