


 <!-- JAVASCRIPT -->
 <script src="{{ asset('admin/assets/libs/jquery/jquery.min.js') }}"></script>
 <script src="{{ asset('admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
 <script src="{{ asset('admin/assets/libs/metismenu/metisMenu.min.js') }}"></script>
 <script src="{{ asset('admin/assets/libs/simplebar/simplebar.min.js') }}"></script>
 <script src="{{ asset('admin/assets/libs/node-waves/waves.min.js') }}"></script>
 <script src="{{ asset('admin/assets/libs/waypoints/lib/jquery.waypoints.min.js') }}"></script>
 <script src="{{ asset('admin/assets/libs/jquery.counterup/jquery.counterup.min.js') }}"></script>




 {{-- <script src="{{ asset('admin/assets/js/pages/dashboard.init.js') }}"></script> --}}
 <!-- parsleyjs form validation -->
 <script src="{{asset ('admin/assets/libs/parsleyjs/parsley.min.js') }}"></script> 

 <script src="{{ asset('admin/assets/js/pages/form-validation.init.js') }}"></script>

 <!-- App js -->
 <script src="{{ asset('admin/assets/js/app.js') }}"></script>


 @if(Session::has('success'))
 <!-- toastr plugin -->
 <script src="{{ asset('admin/assets/libs/toastr/build/toastr.min.js') }}"></script>

 <!-- toastr init -->
 {{-- <script src="{{asset('admin/assets/js/pages/toastr.init.js') }}"></script> --}}
 <script>
toastr.options = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": false,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": 300,
    "hideDuration": 1000,
    "timeOut": 5000,
    "extendedTimeOut": 1000,
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
}
toastr.success("{!!(Session::get('success')) !!}");
 </script>
 <!-- toastr end -->
 @endif

 @yield('foot')

