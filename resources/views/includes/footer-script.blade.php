
<!--**********************************
        Scripts
***********************************-->
<!-- Required vendors -->
<script src="{{ asset('template/vendor/global/global.min.js') }}"></script>
<script src="{{ asset('template/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>

{{-- Datatable start --}}
<link rel="stylesheet" href="{{ asset('template/vendor/datatables/css/jquery.dataTables.min.css') }}"> </link>
<script src="{{ asset('template/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
{{-- Datatable end --}}

<script src="{{ asset('template/js/custom.min.js') }}"></script>
<script src="{{ asset('template/js/deznav-init.js') }}"></script>

<!-- Chart piety plugin files -->
<script src="{{ asset('template/vendor/peity/jquery.peity.min.js') }}"></script>

<!-- Dashboard 1 -->
@if(Route::currentRouteName() == 'home')
@endif

<!-- Toastr -->
<script src="{{ asset('template/vendor/toastr/js/toastr.min.js')}}"></script>

<!-- All init script -->
<script src="{{ asset('template/js/plugins-init/toastr-init.js')}}"></script>


