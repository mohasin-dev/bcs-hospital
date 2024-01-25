<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - {{ config('app.name', 'Laravel') }}</title>
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('assets/frontend/images/favicon.ico')}}">

       <!-- CSS
    ================================================== -->
    <!-- Bootstrap css file-->
    <link href="{{ asset('assets/frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font awesome css file-->
    <link href="{{ asset('assets/frontend/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- Default Theme css file -->
    <link id="switcher" href="{{ asset('assets/frontend/css/themes/lite-blue-theme.css') }}" rel="stylesheet">
    <!-- Slick slider css file -->
    <link href="{{ asset('assets/frontend/css/slick.css') }}" rel="stylesheet">
    <!-- Photo Swipe Image Gallery -->
    <link rel='stylesheet prefetch' href="{{ asset('assets/frontend/css/photoswipe.css') }}">
    <link rel='stylesheet prefetch' href="{{ asset('assets/frontend/css/default-skin.css') }}">

    <!-- Main structure css file -->
    <link href="{{ asset('assets/frontend/css/style.css') }}" rel="stylesheet">
    <!--Toster css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Habibi' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Cinzel+Decorative:900' rel='stylesheet' type='text/css'>
    @stack('header-style')
    <style>

    </style>
</head>
<body>
    <!-- BEGAIN PRELOADER -->
    <div id="preloader">
    <div id="status">&nbsp;</div>
    </div>
    <!-- END PRELOADER -->

      <!-- SCROLL TOP BUTTON -->
      <a class="scrollToTop" href="#"><i class="fa fa-heartbeat"></i></a>
      <!-- END SCROLL TOP BUTTON -->

      <!--=========== BEGIN HEADER SECTION ================-->
        <nav class="navbar navbar-default">
            <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" style="margin-top: -10px; margin-right: 100px;" href="{{ route('home') }}"><img style="height: 50px;" class="img-responsive" src="{{ asset('assets/frontend/images/logo.png') }}" alt="logo"></a>
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ route('home') }}">Home<span class="sr-only">(current)</span></a></li>
                  <li class="{{ Request::is('about') ? 'active' : '' }}"><a href="{{ route('about') }}">About Us</a></li>
                  <li class="{{ Request::is('services') ? 'active' : '' }}"><a href="{{ route('services') }}">Services</a></li>
                  <li class="{{ Request::is('constitutions') ? 'active' : '' }}"><a href="{{ route('constitutions') }}">Constitutions</a></li>
                  <li class="{{ Request::is('donate') ? 'active' : '' }}"><a href="{{ route('donate') }}">Donate</a></li>
                  <li class="{{ Request::is('member-list') ? 'active' : '' }}"><a href="{{ route('member.list') }}">Member List</a></li>
                  <li class="{{ Request::is('gallery') ? 'active' : '' }}"><a href="{{ route('gallery') }}">Gallery</a></li>
                  {{-- <li class="{{ Request::is('blog') ? 'active' : '' }}"><a href="{{ route('blog') }}">Blog</a></li> --}}
                  <li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
              </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
      <!--=========== END HEADER SECTION ================-->

    @yield('content')


<!--=========== Start Footer SECTION ================-->
    <footer id="footer">
        <!-- Start Footer Top -->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="single-footer-widget">
                    <div class="section-heading">
                    <h2>About Us</h2>
                    <div class="line"></div>
                    </div>
                    <p>Pediatricians specialize in the care of infants, children, and adolescents. Pediatricians provide a range of services from well-child care, to basic childhood immunizations and illnesses, to managing complex medical conditions and chronic disorders. We ensures constant and timely communication.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="single-footer-widget">
                    <div class="section-heading">
                    <h2>Links</h2>
                    <div class="line"></div>
                    </div>
                    <ul class="footer-service">
                    <li><a href="{{ route('blog') }}"><span class="fa fa-check"></span>Blog</a></li>
                    <li><a href="{{ route('doctor') }}"><span class="fa fa-check"></span>Our Doctors</a></li>
                    <li><a href="{{ route('staff') }}"><span class="fa fa-check"></span>Our Staff</a></li>
                    <li><a href="{{ route('carrer') }}"><span class="fa fa-check"></span>Carrer</a></li>
                    <li><a href="{{ route('membership.form') }}"><span class="fa fa-check"></span>Get Membership</a></li>
                    </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="single-footer-widget">
                    <div class="section-heading">
                    <h2>Tags</h2>
                    <div class="line"></div>
                    </div>
                    <ul class="tag-nav">
                        <li><a href="#">Dental</a></li>
                        <li><a href="#">Surgery</a></li>
                        <li><a href="#">Pediatric</a></li>
                        <li><a href="#">Cardiac</a></li>
                        <li><a href="#">Ophthalmology</a></li>
                        <li><a href="#">Diabetes</a></li>
                    </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3" style="padding-right: 0; padding-left: 0;">
                    <div class="single-footer-widget">
                    <div class="section-heading">
                    <h2>Contact Info</h2>
                    <div class="line"></div>
                    </div>
                    {{-- <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p> --}}
                    <address class="contact-info">
                    <p><span class="fa fa-home"></span>120/3-C, Darus Salam (Technical<br><p style="margin-left: 20px; display: inline;">More)</p> Mirpur, Dhaka -1216,<p style="margin-top: 10px; margin-left: 20px;">Bangladesh.</p></p>
                    <p><span class="fa fa-phone"></span>+8801763678870</p>
                    <p><span class="fa fa-phone"></span>+88029025504</p>
                    <p class="mail"><span class="fa fa-envelope"></span>bangladeshcancersociety@gmail.com</p>
                    <p><span class="fa fa-envelope"></span>info@bangladeshcancersociety.org</p>
                    </address>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <!-- Start Footer Middle -->
        <div class="footer-middle">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="footer-copyright">
                        <p>&copy; Copyright 2019 <a href="{{ route('home') }}">Bangladesh Cancer Society Hospital</a></p>
                    </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="footer-social">
                        <a href="#"><span class="fa fa-facebook"></span></a>
                        <a href="#"><span class="fa fa-twitter"></span></a>
                        <a href="#"><span class="fa fa-google-plus"></span></a>
                        <a href="#"><span class="fa fa-linkedin"></span></a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Footer Bottom -->
        <div class="footer-bottom" style="margin-bottom: 0;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-center" style="margin-bottom: 0px;">Design &amp; Developed By <a href="http://intezie.com" target="_blank">Intezie Limited</a> | Powered By Creativity &amp; Technology</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
  <!--=========== End Footer SECTION ================-->

  <!-- jQuery Library  -->
  <script src="{{ asset('assets/frontend/js/jquery.js') }}"></script>
  <!-- Bootstrap default js -->
  <script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
  <!-- slick slider -->
  <script src="{{ asset('assets/frontend/js/slick.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/frontend/js/modernizr.custom.79639.js') }}"></script>
  <!-- counter -->
  <script src="{{ asset('assets/frontend/js/waypoints.min.js') }}"></script>
  <script src="{{ asset('assets/frontend/js/jquery.counterup.min.js') }}"></script>
  <!-- Doctors hover effect -->
  <script src="{{ asset('assets/frontend/js/snap.svg-min.js') }}"></script>
  <script src="{{ asset('assets/frontend/js/hovers.js') }}"></script>
  <!-- Photo Swipe Gallery Slider -->
  <script src="{{ asset('assets/frontend/js/photoswipe.min.js') }}"></script>
  <script src="{{ asset('assets/frontend/js/photoswipe-ui-default.min.js') }}"></script>
  <script src="{{ asset('assets/frontend/js/photoswipe-gallery.js') }}"></script>

  <!-- Custom JS -->
  <script src="{{ asset('assets/frontend/js/custom.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  {!! Toastr::message() !!}
  <script>
      @if($errors->any())
          @foreach($errors->all() as $error)
                toastr.error('{{ $error }}','Error',{
                    closeButton:true,
                    progressBar:true,
                 });
          @endforeach
      @endif
  </script>
  @stack('footer-script')
</body>
</html>
