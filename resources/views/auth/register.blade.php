 @extends('admin.layouts.app2')
 @section('head')

 @endsection
 @section('title', 'Register Page')
 @section('maincontent')
 <body class="authentication-bg ">
     <div class="account-pages my-5">
         <div class="container ">
             <div class="row">
                 <div class="col-lg-12">
                     <div class="text-center ">
                         <a href="index.html" class="mb-5 d-block auth-logo"> <img
                                 src="{{ asset('admin/assets/images/logo-dark.png') }}" alt="" height="22"
                                 class="logo logo-dark"> <img src="{{ asset('admin/assets/images/logo-light.png') }}"
                                 alt="" height="22" class="logo logo-light"> </a>
                     </div>
                 </div>
             </div>
             <div class="row align-items-center justify-content-center">
                 <div class="col-md-8 col-lg-6 col-xl-5">
                     <div class="card">
                         <div class="card-body p-4">
                             <div class="text-center mt-2">
                                 <h5 class="text-primary">Register Account</h5>
                                 <p class="text-muted">Get your free Minible account now.</p>
                             </div>
                             <div class="p-2 mt-4">
                                 <form method="POST" action="{{ route('register') }}">
                                     @csrf
                                     <div class="mb-3">
                                         <label class="form-label" for="username">Name</label>
                                         <input id="name" type="text"
                                             class="form-control @error('name') is-invalid @enderror" name="name"
                                             value="{{ old('name') }}" required autocomplete="name" autofocus
                                             placeholder="Enter Name">

                                         @error('name')
                                         <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                         </span>
                                         @enderror
                                     </div>
                             </div>
                             <div class="mb-3">
                                 <label class="form-label" for="useremail">Email</label>
                                 <input id="email" type="email"
                                     class="form-control @error('email') is-invalid @enderror" name="email"
                                     value="{{ old('email') }}" required autocomplete="email" placeholder="Enter Email">

                                 @error('email')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                                 @enderror
                             </div>

                             <div class="mb-3">
                                 <label class="form-label" for="userpassword">Password</label>
                                 <input id="password" type="password"
                                     class="form-control @error('password') is-invalid @enderror" name="password"
                                     required autocomplete="new-password" placeholder="Enter Password">
                             </div>
                             <div>
                                 <div class="mb-3">
                                     <label class="form-label" for="userpassword">Confirm Password</label>
                                     <div class="mb-3">
                                         <input id="password-confirm" type="password" class="form-control"
                                             name="password_confirmation" required autocomplete="new-password"
                                             placeholder="Enter Same Password">
                                     </div>
                                     @error('password')
                                     <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                     </span>
                                     @enderror
                                 </div>

                             </div>

                             <div class="form-check">
                                 <input type="checkbox" class="form-check-input" id="auth-terms-condition-check">
                                 <label class="form-check-label" for="auth-terms-condition-check">I accept <a
                                         href="javascript: void(0);" class="text-dark">Terms and
                                         Conditions</a></label>
                                 @error('password')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                                 @enderror
                             </div>
                             <div class="mt-3 text-end">
                                 <button class="btn btn-primary w-sm waves-effect waves-light"
                                     type="submit">Register</button>
                             </div>

                             <div class="mt-4 text-center">
                                 <p class="text-muted mb-0">Already have an account ? <a href="{{ route('login') }}"
                                         class="fw-medium text-primary"> Login</a></p>
                             </div>
                             </form>
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
