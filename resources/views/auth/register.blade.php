{{-- <x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout> --}}

<!DOCTYPE html>
<html lang="en" class="loading">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta name="description"
        content="Apex admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities." />
    <meta name="keywords"
        content="admin template, Apex admin template, dashboard template, flat admin template, responsive admin template, web app" />
    <meta name="author" content="PIXINVENT" />
    <title>SIPATEN</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon1.ico') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="app-assets/img/ico/apple-icon-60.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="app-assets/img/ico/apple-icon-76.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="app-assets/img/ico/apple-icon-120.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="app-assets/img/ico/apple-icon-152.png" />
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/img/ico/favicon.ico" />
    <link rel="shortcut icon" type="image/png" href="app-assets/img/ico/favicon-32.png" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-touch-fullscreen" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="default" />

    <link rel="apple-touch-icon" sizes="60x60" href="app-assets/img/ico/apple-icon-60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="app-assets/img/ico/apple-icon-76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="app-assets/img/ico/apple-icon-120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="app-assets/img/ico/apple-icon-152.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/img/ico/favicon.ico">
    <link rel="shortcut icon" type="image/png" href="app-assets/img/ico/favicon-32.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <link
        href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900|Montserrat:300,400,500,600,700,800,900"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900|Montserrat:300,400,500,600,700,800,900"
        rel="stylesheet" />
    <!-- BEGIN VENDOR CSS-->
    <!-- font icons-->
    <link rel="stylesheet" type="text/css" href="app-assets/fonts/feather/style.min.css" />
    <link rel="stylesheet" type="text/css" href="app-assets/fonts/simple-line-icons/style.css" />
    <link rel="stylesheet" type="text/css" href="app-assets/fonts/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/perfect-scrollbar.min.css" />
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/prism.min.css" />
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/chartist.min.css" />
    <!-- END VENDOR CSS-->
    <!-- BEGIN APEX CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/app.css" />
    <!-- END APEX CSS-->
    <!-- BEGIN Page Level CSS-->
    <!-- END Page Level CSS-->

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta name="description"
        content="Apex admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities." />
    <meta name="keywords"
        content="admin template, Apex admin template, dashboard template, flat admin template, responsive admin template, web app" />
    <meta name="author" content="PIXINVENT" />
    <link rel="apple-touch-icon" sizes="60x60" href="app-assets/img/ico/apple-icon-60.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="app-assets/img/ico/apple-icon-76.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="app-assets/img/ico/apple-icon-120.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="app-assets/img/ico/apple-icon-152.png" />
    {{-- MENGUBAH ICON PADA TITTLE --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('icon.ico') }}" />
    {{--  --}}
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('icon.ico') }}" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-touch-fullscreen" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="default" />
    <link
        href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900|Montserrat:300,400,500,600,700,800,900"
        rel="stylesheet" />
    <!-- BEGIN VENDOR CSS-->
    <!-- font icons-->
    <link rel="stylesheet" type="text/css" href="app-assets/fonts/feather/style.min.css" />
    <link rel="stylesheet" type="text/css" href="app-assets/fonts/simple-line-icons/style.css" />
    <link rel="stylesheet" type="text/css" href="app-assets/fonts/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/perfect-scrollbar.min.css" />
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/prism.min.css" />
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/datatables.min.css" />
    <!-- END VENDOR CSS-->
    <!-- BEGIN APEX CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/app.css" />
    <!-- END APEX CSS-->
    <!-- BEGIN Page Level CSS-->
    <!-- END Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/datatables.min.css" />
</head>

<!-- BEGIN : Body-->
<body data-col="1-column" class="1-column blank-page">
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="wrapper">
      <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
          <div class="content-wrapper">
            <!--Registration Page Starts-->
            <section id="regestration">
              <div class="container-fluid">
                <div class="row full-height-vh m-0">
                  <div
                    class="col-12 d-flex align-items-center justify-content-center"
                  >
                    <div class="card">
                      <div class="card-content">
                        <div class="card-body register-img">
                          <div class="row m-0">
                            <div
                              class="col-lg-6 d-none d-lg-block py-2 text-center"
                            >
                              <img
                                src="app-assets/img/gallery/register.png"
                                alt=""
                                class="img-fluid mt-3 pl-3"
                                width="400"
                                height="230"
                              />
                            </div>
                            <div class="col-lg-6 col-md-12 px-4 pt-3 bg-white">
                              <h4 class="card-title mb-2">Create Account</h4>
                              <p class="card-text mb-3">
                                Fill the below form to create a new account.
                              </p>
                              <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <input id="name" class="form-control mb-3" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" placeholder="{{ __('Enter your name') }}">
                                <input id="email" class="form-control mb-3" type="email" name="email" value="{{ old('email') }}" required autocomplete="username" placeholder="{{ __('Enter your email') }}">
                                <input id="password" class="form-control mb-3" type="password" name="password" required autocomplete="new-password" placeholder="{{ __('Enter your password') }}">
                                <input id="password_confirmation" class="form-control mb-3" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="{{ __('Confirm your password') }}">

                              <div class="custom-control custom-checkbox custom-control-inline mb-3">
                                {{-- @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature()) --}}
                                <input
                                  type="checkbox"
                                  id="customCheckboxInline1"
                                  name="customCheckboxInline1"
                                  class="custom-control-input"
                                  unchecked
                                />
                                <label
                                  class="custom-control-label"
                                  for="customCheckboxInline1"
                                >
                                  I accept the terms & conditions.
                                </label>
                                {{-- @endif --}}
                              </div>
                              <div
                                class="fg-actions d-flex justify-content-between"
                              >
                                <div class="login-btn">
                                  <button class="btn btn-outline-primary">
                                    <a
                                      href="{{ route('login') }}"
                                      class="text-decoration-none"
                                    >
                                      Back To Login
                                    </a>
                                  </button>
                                </div>
                                <div class="recover-pass">
                                  <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                  </button>
                                  </form>
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
            <!--Registration Page Ends-->
          </div>
        </div>
        <!-- END : End Main Content-->
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

    <!-- BEGIN VENDOR JS-->
    <script
      src="app-assets/vendors/js/core/jquery-3.2.1.min.js"
      type="text/javascript"
    ></script>
    <script
      src="app-assets/vendors/js/core/popper.min.js"
      type="text/javascript"
    ></script>
    <script
      src="app-assets/vendors/js/core/bootstrap.min.js"
      type="text/javascript"
    ></script>
    <script
      src="app-assets/vendors/js/perfect-scrollbar.jquery.min.js"
      type="text/javascript"
    ></script>
    <script
      src="app-assets/vendors/js/prism.min.js"
      type="text/javascript"
    ></script>
    <script
      src="app-assets/vendors/js/jquery.matchHeight-min.js"
      type="text/javascript"
    ></script>
    <script
      src="app-assets/vendors/js/screenfull.min.js"
      type="text/javascript"
    ></script>
    <script
      src="app-assets/vendors/js/pace/pace.min.js"
      type="text/javascript"
    ></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN APEX JS-->
    <script src="app-assets/js/app-sidebar.js" type="text/javascript"></script>
    <script
      src="app-assets/js/notification-sidebar.js"
      type="text/javascript"
    ></script>
    <script src="app-assets/js/customizer.js" type="text/javascript"></script>
    <!-- END APEX JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
  </body>
  <!-- END : Body-->
</html>