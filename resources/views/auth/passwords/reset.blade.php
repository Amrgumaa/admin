 @extends('admin.layouts.app2')
 @section('head')

 @endsection
 @section('title', 'Reset Page')
 @section('maincontent')
 <body class="authentication-bg">
     <div class="account-pages my-5  pt-sm-5">
         <div class="container">
             <div class="row justify-content-center">
                 <div class="col-md-8 col-lg-6 col-xl-5">
                     <div>
                         <a href="index.html" class="mb-5 d-block auth-logo"> <img src="assets/images/logo-dark.png"
                                 alt="" height="22" class="logo logo-dark"> <img src="assets/images/logo-light.png"
                                 alt="" height="22" class="logo logo-light"> </a>
                         <div class="card">
                             <div class="card-body p-4">
                                 <div class="text-center mt-2">
                                     <h5 class="text-primary">Reset Password</h5>
                                     <p class="text-muted">Reset Password with Minible.</p>
                                 </div>
                                 <div class="p-2 mt-4">
                                     <div class="alert alert-success text-center mb-4" role="alert"> Enter your Email
                                         and instructions will be sent to you! </div>
                                     <form method="POST" action="{{ route('password.update') }}">
                                         @csrf
                                         <input type="hidden" name="token" value="{{ $token }}">
                                         <div class="mb-3">
                                             <label class="form-label" for="useremail">Email</label>
                                             <input id="email" type="email"
                                                 class="form-control @error('email') is-invalid @enderror" name="email"
                                                 value="{{ $email ?? old('email') }}" required autocomplete="email"
                                                 autofocus placeholder="Enter Email">

                                             @error('email')
                                             <span class="invalid-feedback" role="alert">
                                                 <strong>{{ $message }}</strong>
                                             </span>
                                             @enderror
                                         </div>
                                         <div class="mb-3">
                                             <label class="form-label" for="userpassword">Password</label>

                                             <div class="col-md-6">
                                                 <input id="password" type="password"
                                                     class="form-control @error('password') is-invalid @enderror"
                                                     name="password" required autocomplete="new-password">

                                                 @error('password')
                                                 <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $message }}</strong>
                                                 </span>
                                                 @enderror
                                             </div>
                                         </div>

                                         <div class="mb-3">
                                             <label class="form-label" for="userpassword">Confirm Password</label>
                                             <div class="mb-3">

                                                 <div class="col-md-6">
                                                     <input id="password-confirm" type="password" class="form-control"
                                                         name="password_confirmation" required
                                                         autocomplete="new-password">
                                                 </div>
                                             </div>

                                             <div class="mt-3 text-end">
                                                 <button type="submit"
                                                     class="btn btn-primary w-sm waves-effect waves-light">
                                                     {{ __('Reset Password') }}
                                                 </button>
                                             </div>

                                             <div class="mt-4 text-center">
                                                 <p class="mb-0">Remember It ? <a href="auth-login.html"
                                                         class="fw-medium text-primary"> Signin </a></p>
                                             </div>
                                     </form>
                                 </div>
                             </div>
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
