<!-- loading  -->
<link rel="stylesheet" href=" {{ asset('amr/loading/minimal.css') }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
<script src="{{ asset('amr/loading/pace.min.js') }}" type="text/javascript"></script>


<!-- Bootstrap Css -->
<link href="{{asset ('admin/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
<!-- Icons Css -->
<link href="{{asset ('admin/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
<!-- App Css-->
<link href="{{asset ('admin/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />


@yield('head')
