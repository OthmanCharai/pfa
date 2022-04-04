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
   <link rel="stylesheet" href="{{ asset('/vendor/fonts/boxicons.css')}}" />
  <link rel="stylesheet" href="{{ asset('/vendor/fonts/fontawesome.css')}}" />


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

                        <a href="" class="logo">
                            <img src="{{asset('products/images/logo.png')}}" alt="Molla Logo" width="105" height="25">
                        </a>

                        <nav class="main-nav">
                            <ul class="menu ">
                                <li class="megamenu-container active">
                                    <a href="" >Home</a>

                                </li>
                                <li class="megamenu-container ">
                                    <a href="" >About</a>

                                </li>
                                <li class="megamenu-container ">
                                    <a href="" >Contact</a>
                                </li>
                                <li class="megamenu-container ">
                                    <a href="" >Faqs</a>
                                </li>
                            </ul>

                        </nav><!-- End .main-nav -->
                    </div><!-- End .header-left -->

                    <div class="header-right">
                        <ul class="menu ">
                            <li class="megamenu-container ">

                                <a href="#signin-modal" data-toggle="modal"><i class="icon-user"></i>Login</a>
                            </li>
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
