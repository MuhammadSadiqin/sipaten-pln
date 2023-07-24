<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>
           
              <br>
              <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 mr-5" href="{{ route('register') }}">
                {{ __('Register') }}
            </a>
           
            <div class="flex items-center justify-end mt-4">
           
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
               
                <x-button class="ml-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>

{{-- @extends('layouts.master')
@section('content')
      <!-- ////////////////////////////////////////////////////////////////////////////-->
      <div class="wrapper">
        <div class="main-panel">
          <!-- BEGIN : Main Content-->
          <div class="main-content">
            <div class="content-wrapper"><!--Login Page Starts-->
  <section id="login">
    <div class="container-fluid">
      <div class="row full-height-vh m-0">
        <div class="col-12 d-flex align-items-center justify-content-center">
          <div class="card">
            <div class="card-content">
              <div class="card-body login-img">
                <div class="row m-0">
                  <div class="col-lg-6 d-lg-block d-none py-2 text-center align-middle">
                    <img src="app-assets/img/gallery/login.png" alt="" class="img-fluid mt-5" width="400" height="230">
                  </div>
                  <div class="col-lg-6 col-md-12 bg-white px-4 pt-3">
                    <h4 class="mb-2 card-title">Login</h4>
                    <p class="card-text mb-3">
                      Welcome back, please login to your account.
                    </p>
                    <input type="text" class="form-control mb-3" placeholder="Username" />
                    <input type="password" class="form-control mb-1" placeholder="Password" />
                    <div class="d-flex justify-content-between mt-2">
                      <div class="remember-me">
                        <div class="custom-control custom-checkbox custom-control-inline mb-3">
                          <input type="checkbox" id="customCheckboxInline1" name="customCheckboxInline1" class="custom-control-input" />
                          <label class="custom-control-label" for="customCheckboxInline1">
                            Remember Me
                          </label>
                        </div>
                      </div>
                      <div class="forgot-password-option">
                        <a href="forgot-password-page.html" class="text-decoration-none text-primary">Forgot Password
                          ?</a>
                      </div>
                    </div>
                    <div class="fg-actions d-flex justify-content-between">
                      <div class="login-btn">
                        <button class="btn btn-outline-primary">
                          <a href="register-page.html" class="text-decoration-none">Register</a>
                        </button>
                      </div>
                      <div class="recover-pass">
                        <button class="btn btn-primary">
                          <a href="dashboard1.html" class="text-decoration-none text-white">Login</a>
                        </button>
                      </div>
                    </div>
                    <hr class="m-0">
                    <div class="d-flex justify-content-between mt-3">
                      <div class="option-login">
                        <h6 class="text-decoration-none text-primary">Or Login With</h6>
                      </div>
                      <div class="social-login-options">
                        <a class="btn btn-social-icon mr-2 btn-facebook">
                          <span class="fa fa-facebook"></span>
                        </a>
                        <a class="btn btn-social-icon mr-2 btn-twitter">
                          <span class="fa fa-twitter"></span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Login Page Ends--> --}}
  
            {{-- </div>
          </div>
          <!-- END : End Main Content-->
        </div>
      </div>
      <!-- ////////////////////////////////////////////////////////////////////////////-->
  
      <!-- BEGIN VENDOR JS-->
      <script src="app-assets/vendors/js/core/jquery-3.2.1.min.js" type="text/javascript"></script>
      <script src="app-assets/vendors/js/core/popper.min.js" type="text/javascript"></script>
      <script src="app-assets/vendors/js/core/bootstrap.min.js" type="text/javascript"></script>
      <script src="app-assets/vendors/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
      <script src="app-assets/vendors/js/prism.min.js" type="text/javascript"></script>
      <script src="app-assets/vendors/js/jquery.matchHeight-min.js" type="text/javascript"></script>
      <script src="app-assets/vendors/js/screenfull.min.js" type="text/javascript"></script>
      <script src="app-assets/vendors/js/pace/pace.min.js" type="text/javascript"></script>
      <!-- BEGIN VENDOR JS-->
      <!-- BEGIN PAGE VENDOR JS-->
      <!-- END PAGE VENDOR JS-->
      <!-- BEGIN APEX JS-->
      <script src="app-assets/js/app-sidebar.js" type="text/javascript"></script>
      <script src="app-assets/js/notification-sidebar.js" type="text/javascript"></script>
      <script src="app-assets/js/customizer.js" type="text/javascript"></script>
      <!-- END APEX JS-->
      <!-- BEGIN PAGE LEVEL JS-->
      <!-- END PAGE LEVEL JS-->
@endsection --}}


