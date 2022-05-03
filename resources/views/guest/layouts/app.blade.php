<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-default">

<head>
  <meta charset="utf-8" />
  <title>Title</title>

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="{{ asset('/img/favicon/favicon.ico')}}" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">

  <!-- Icons. Uncomment required icon fonts -->
   <link rel="stylesheet" href="{{ asset('temp2/vendor/fonts/boxicons.css')}}" />
  <link rel="stylesheet" href="{{ asset('temp2/vendor/fonts/fontawesome.css')}}" />


  @yield('afterCss')


</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">
        <header class="header">


            <div class="header-middle sticky-header">
                <div class="container">
                    <div class="header-left">
                        <button class="mobile-menu-toggler">
                            <span class="sr-only">Toggle mobile menu</span>
                            <i class="icon-bars"></i>
                        </button>

                        {{-- <a href="" class="logo">
                            <img src="{{asset('temp2/images/logo.png')}}" alt="Molla Logo" width="105" height="25">
                        </a> --}}

                        <nav class="main-nav">
                            <ul class="menu ">
                                <li class="megamenu-container  {{ request()->is('guest/home') ? 'active' : '' }}">
                                    <a href="{{route('guest.home')}}" >Home</a>

                                </li>
                                <li class="megamenu-container  {{ request()->is('guest/about') ? 'active' : '' }}">
                                    <a href="{{route('guest.about')}}" >About</a>

                                </li>
                                <li class="megamenu-container  {{ request()->is('guest/contact') ? 'active' : '' }}">
                                    <a href="{{route('guest.contact')}}" >Contact</a>
                                </li>
                                <li class="megamenu-container  {{ request()->is('guest/faqs') ? 'active' : '' }}">
                                    <a href="{{route('guest.faqs')}}" >Faqs</a>
                                </li>
                                <li class="megamenu-container  {{ request()->is('guest/products') ? 'active' : '' }}">
                                    <a href="{{route('guest.products')}}" >Products</a>
                                </li>
                            </ul>

                        </nav><!-- End .main-nav -->
                    </div><!-- End .header-left -->

                    <div class="header-right">
                        <ul class="menu ">
                            @guest

                                <li class="megamenu-container ">

                                    <a href="#signin-modal" data-toggle="modal"><i class="icon-user"></i>Login</a>
                                </li>
                            @endguest
                            @auth
                            <li class="megamenu-container ">
                                <a href="{{(auth()->user()->role=="influencer")?route('influencers.profile.account'):route('entreprises.profile.account')}}">

                                    <i class="icon-home"></i>Profile</a>
                            </li>
                            <li class="megamenu-container ">
                                <form  method="POST" action="{{route('logout')}}">
                                    @csrf
                                    <button class="btn">
                                        <i class="icon-long-arrow-right me-2"></i>
                                        <span class="align-middle">Log Out</span>
                                    </button>
                                </form>

                            </li>
                            @endauth
                        </ul>

                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-middle -->
        </header><!-- End .header -->
        <div class="layout-container">



          <!-- Layout container -->
          <div class="layout-page">
            <!-- Content wrapper -->
            <div class="content-wrapper">


              <!-- Content -->

              <div class="container-xxl flex-grow-1 container-p-y">
                @yield('content')
              </div>
              <!--/ Content -->

              <!-- Footer -->
              <footer class="content-footer footer bg-footer-theme">
                <div class="container-xxl d-flex flex-column flex-md-row flex-wrap justify-content-between py-2">

                </div>
              </footer>
              <!-- / Footer -->

              <div class="content-backdrop fade"></div>
            </div>
            <!--/ Content wrapper -->
          </div>

          <!--/ Layout container -->
        </div>
      </div>
      <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

      <!-- Mobile Menu -->
      <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

      <div class="mobile-menu-container">
          <div class="mobile-menu-wrapper">
              <span class="mobile-menu-close"><i class="icon-close"></i></span>

              {{-- <form action="#" method="get" class="mobile-search">
                  <label for="mobile-search" class="sr-only">Search</label>
                  <input type="search" class="form-control" name="mobile-search" id="mobile-search" placeholder="Search in..." required>
                  <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
              </form> --}}

              <nav class="mobile-nav">
                  <ul class="mobile-menu">
                    <li class="  {{ request()->is('guest/home') ? 'active' : '' }}">
                        <a href="{{route('guest.home')}}" >Home</a>

                    </li>
                    <li class="  {{ request()->is('guest/about') ? 'active' : '' }}">
                        <a href="{{route('guest.about')}}" >About</a>

                    </li>
                    <li class="  {{ request()->is('guest/contact') ? 'active' : '' }}">
                        <a href="{{route('guest.contact')}}" >Contact</a>
                    </li>
                    <li class="megamenu-container  {{ request()->is('guest/faqs') ? 'active' : '' }}">
                        <a href="{{route('guest.faqs')}}" >Faqs</a>
                    </li>
                    <li class="  {{ request()->is('guest/products') ? 'active' : '' }}">
                        <a href="{{route('guest.products')}}" >Products</a>
                    </li>
                  </ul>
              </nav><!-- End .mobile-nav -->

              <div class="social-icons">
                  <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
                  <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
                  <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
                  <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
              </div><!-- End .social-icons -->
          </div><!-- End .mobile-menu-wrapper -->
      </div><!-- End .mobile-menu-container -->

    <!-- Sign in / Register Modal -->
    <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="icon-close"></i></span>
                    </button>

                    <div class="form-box">
                        <div class="form-tab">
                            <ul class="nav nav-pills nav-fill" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="signin-tab" data-toggle="tab" href="#signin" role="tab" aria-controls="signin" aria-selected="true">Sign In</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Register</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="tab-content-5">
                                <div class="tab-pane fade show active" id="signin" role="tabpanel" aria-labelledby="signin-tab">
                                    <form action="{{route('login')}}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="singin-email">email address *</label>
                                            <input type="text" class="form-control" id="singin-email" name="email" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-group">
                                            <label for="singin-password">Password *</label>
                                            <input type="password" class="form-control" id="singin-password" name="password" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>LOG IN</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="signin-remember">
                                                <label class="custom-control-label" for="signin-remember">Remember Me</label>
                                            </div><!-- End .custom-checkbox -->

                                            <a href="#" class="forgot-link">Forgot Your Password?</a>
                                        </div><!-- End .form-footer -->
                                    </form>
                                    <div class="form-choice">
                                        <p class="text-center">or sign in with</p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-g">
                                                    <i class="icon-google"></i>
                                                    Login With Google
                                                </a>
                                            </div><!-- End .col-6 -->
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-f">
                                                    <i class="icon-facebook-f"></i>
                                                    Login With Facebook
                                                </a>
                                            </div><!-- End .col-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .form-choice -->
                                </div><!-- .End .tab-pane -->
                                <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                                    <form action="{{route('register')}}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="register-name">Your Name *</label>
                                            <input type="text" class="form-control" id="register-name" name="name" value="{{ old('name') }}" required>
                                        </div><!-- End .form-group -->
                                        <div class="form-group">
                                            <label for="register-email">Your email address *</label>
                                            <input type="email" class="form-control" id="register-email" name="email" value="{{ old('email') }}" required>
                                        </div><!-- End .form-group -->
                                        <div class="form-group">
                                            <label >Role *</label><br>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="role" id="influencer" value="influencer">
                                                <label class="form-check-label" for="influencer">Influencer</label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="role" id="entreprise" value="entreprise">
                                                <label class="form-check-label" for="entreprise">Entreprise</label>
                                              </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="register-password">Your Password *</label>
                                            <input type="password" class="form-control" id="register-password" name="password" required>
                                        </div><!-- End .form-group -->
                                        <div class="form-group">
                                            <label for="register-password-confirm"> Confirm Your Password *</label>
                                            <input type="password" class="form-control" id="register-password-confirm" name="password_confirmation" required>
                                        </div><!-- End .form-group -->
                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>SIGN UP</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="register-policy" required>
                                                <label class="custom-control-label" for="register-policy">I agree to the <a href="#">privacy policy</a> *</label>
                                            </div><!-- End .custom-checkbox -->
                                        </div><!-- End .form-footer -->
                                    </form>
                                    <div class="form-choice">
                                        <p class="text-center">or sign in with</p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-g">
                                                    <i class="icon-google"></i>
                                                    Login With Google
                                                </a>
                                            </div><!-- End .col-6 -->
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login  btn-f">
                                                    <i class="icon-facebook-f"></i>
                                                    Login With Facebook
                                                </a>
                                            </div><!-- End .col-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .form-choice -->
                                </div><!-- .End .tab-pane -->
                            </div><!-- End .tab-content -->
                        </div><!-- End .form-tab -->
                    </div><!-- End .form-box -->
                </div><!-- End .modal-body -->
            </div><!-- End .modal-content -->
        </div><!-- End .modal-dialog -->
    </div><!-- End .modal -->

  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  {{-- <script src="{{ asset('/vendor/libs/jquery/jquery.js')}}"></script>
  <script src="{{ asset('/vendor/libs/popper/popper.js')}}"></script>
  <script src="{{ asset('/vendor/js/bootstrap.js')}}"></script>
  <script src="{{ asset('/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
  <script src="{{ asset('/vendor/libs/hammer/hammer.js')}}"></script>
  <script src="{{ asset('/vendor/js/menu.js')}}"></script> --}}
  <!-- endbuild -->

  @yield('coreJs')
  <!-- Main JS -->
  {{-- <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script> --}}
  {{-- <script src="{{ asset('/js/main.js')}}"  type="text/javascript"></script> --}}
</body>

</html>
