 @extends('admin.layouts.app2')
 @section('head')

 @endsection
 @section('title', 'Login Page')
 @section('maincontent')

 <body class="authentication-bg">
     <div class="account-pages my-5  pt-sm-5">
         <div class="container">
             <div class="row justify-content-center">
                 <div class="col-md-8 col-lg-6 col-xl-5">
                     <div>
                         <a href="index.html" class="mb-5 d-block auth-logo"> <img
                                 src="{{ asset('admin/assets/images/logo-dark.png') }}" alt="" height="22"
                                 class="logo logo-dark"> <img src="a{{asset ('admin/assets/images/logo-light.png') }}"
                                 alt="" height="22" class="logo logo-light"> </a>
                         <div class="card">
                             <div class="card-body p-4">
                                 <div class="text-center mt-2">
                                     <h5 class="text-primary">Lock Screen</h5>
                                     <p class="text-muted">Enter your password to unlock the screen!</p>
                                 </div>
                                 <div class="p-2 mt-4">
                                     <div class="user-thumb text-center mb-4"> <img
                                             src="{{ asset('admin/assets/images/users/avatar-4.jpg') }}"
                                             class="rounded-circle img-thumbnail avatar-lg" alt="thumbnail">
                                         <h5 class="font-size-15 mt-3">{{ Auth::user()->name }}</h5>
                                     </div>
                                     <form action="index.html">
                                         <div class="mb-3">
                                             <label class="form-label" for="userpassword">Password</label>
                                             <input type="password" class="form-control" id="userpassword"
                                                 placeholder="Enter password">
                                         </div>
                                         <div class="mt-3 text-end">
                                             <button class="btn btn-primary w-sm waves-effect waves-light"
                                                 type="submit">Unlock</button>
                                         </div>
                                         <div class="mt-4 text-center">
                                             <p class="mb-0">Not you ? return <a href="auth-login.html"
                                                     class="fw-medium text-primary"> Sign In </a></p>
                                         </div>
                                     </form>
                                 </div>
                             </div>
                         </div>
                         <div class="mt-5 text-center">
                             <p>©
                                 <script>
                                 document.write(new Date().getFullYear())
                                 </script> Minible. Crafted with <i class="mdi mdi-heart text-danger"></i> by
                                 Themesbrand
                             </p>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- end row -->
         </div>
         <!-- end container -->
     </div>

 </body>


 @section('foot')


 @endsection
 @endsection