<!-- Scripts -->
<script src="{{ asset('/js/all.js') }}"></script>
<script src="{{asset('vendor/siges/js/fields.js')}}"></script>
<script src="{{asset('vendor/image-manager/js/imageManager.min.js')}}"></script>
<script src="{{asset('vendor/siges/js/flows.js')}}"></script>
<script src="{{asset('js/dagre/dist/dagre.min.js')}}"></script>
@yield('scripts')
@include('sigesui::partials.foundation_modals')
@include('sweet::alert')
<!-- delete form for elements -->
{!! Form::open(['id' => 'deleteForm', 'method' => 'DELETE']) !!}
{!! Form::close() !!}