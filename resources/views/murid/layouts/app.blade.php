<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>GuruKU | Pesan guru les cepat , mudah , dan terpercaya</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{ asset('landing') }}/img/favicon2.png" rel="icon">
  <link href="{{ asset('landing') }}/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="{{ asset('argon') }}/vendor/nucleo/css/nucleo.css" rel="stylesheet">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:400, 300, 500, 700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{ asset('landing') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link type="text/css" href="{{ asset('argon') }}/css/argon.css?v=1.0.0" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ asset('landing') }}/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="{{ asset('landing') }}/vendor/animate/animate.min.css" rel="stylesheet">
  <link href="{{ asset('landing') }}/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="{{ asset('landing') }}/vendor/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="{{ asset('landing') }}/vendor/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{ asset('halamanMurid') }}/css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: NewBiz
    Theme URL: https://bootstrapmade.com/newbiz-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
  Header
  ============================-->
  <header id="header" class="fixed-top">
    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="/"><h1 class="scrollto"><span>GuruKU</span></h1></a>
      </div>

      <nav class="main-nav float-left d-none d-lg-block">
        <ul>
          <li class="active"><a href="#about">Buka Kelas</a></li>
          <li><a href="#services">List Kelas</a></li>
          <li><a href="#materiku">List Murid</a></li>
          <li><a href="#contact">Bantuan</a></li>
        </ul>
      </nav>
      <nav class="main-nav float-right d-none d-lg-block">

      @auth()
      <div class="container-fluid" style="margin-top: -8px">
        <ul class="navbar-nav align-items-center d-none d-md-flex">
            <li class="nav-item dropdown">
                <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
                        <span class="avatar avatar-sm rounded-circle">
                          @if (!empty($murid->foto) )  
						                <img src="{{ asset($murid->foto) }}" class="img-responsive" alt="avatar murid" style="width: 40px; height: 40px; object-fit: cover;">
					                @else
						                <img alt="Image placeholder" src="{{ asset('argon') }}/img/theme/team-4-800x800.jpg">
					                @endif
                        </span>
                        <div class="media-body ml-2 d-none d-lg-block">
                            <span class="mb-0 text-sm  font-weight-bold">{{ auth()->user()->name }}</span>
                        </div>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <a href="{{ route('dashboard') }}" class="dropdown-item">
                        <i class="ni ni-app"></i>
                        <span>{{ __('Dashboard') }}</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('muridprofile') }}" class="dropdown-item">
                        <i class="ni ni-single-02"></i>
                        <span>{{ __('My profile') }}</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="ni ni-user-run"></i>
                        <span>{{ __('Logout') }}</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                    </form>
                </div>
            </li>
        </ul>
        </div>
        @endauth()
       
        {{--<ul>
          <li><a href="login">Log In</a></li>
          <li><a href="register">Sign Up</a></li>
        </ul> --}}
      </nav>
      <!-- .main-nav -->

    </div>
  </header><!-- #header -->

  <div id="gurus" class="row">
      @yield('content');
  </div>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
        <!-- Download Aplikasi On Google Play -->
            <div class="col-lg-3 footer_apps_img_container">
                <img alt="img-mob-device" class="footer_apps_device" src="https://ruangguru.imgix.net/png/footer-phone-icon.png?auto=enhance%2Cformat%2Ccompress&amp;" style="height: 200px">
            </div>
            <div class="col-lg-9 footer_apps_badges_container">
                <div class="row">
                <div class="footer_apps_caption">
                    Download GRATIS Aplikasi GuruKU sekarang juga!
                </div>
                <div class="app-badges">
                    <a href="https://play.google.com/store/apps/details?id=com.ruangguru.livestudents&amp;hl=in" class="app-badges__item"><img src="https://ruangguru.imgix.net/png/badge-google-play.png?auto=enhance%2Cformat%2Ccompress&amp;" alt="google play"></a><a href="https://itunes.apple.com/id/app/ruangguru-solusi-belajar/id1099742206?l=id&amp;mt=8" class="app-badges__item"><img src="https://ruangguru.imgix.net/png/badge-app-store.png?auto=enhance%2Cformat%2Ccompress&amp;" alt="app store"></a>
                </div>
                </div>
            </div>

          <div class="col-lg-3 col-md-6 footer-links">
          <h4>Menjadi Bagian Kami</h4>
          <ul>
              <li><a href="#">Daftar Sebagai Guru</a></li>
              <li><a href="#">Daftar Sebagai Murid</a></li>
              <li><a href="#">Job Hiring</a></li>
              <li><a href="#">Syarat & Ketentuan Mendaftar</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Tentang Kami</h4>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Terms of service</a></li>
              <li><a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Hubungi Kami</h4>
            <p>
              Jl. Baskoro Raya No.35B<br>
              Tembalang, Semarang City<br>
              Indonesia <br>
              <strong>Phone:</strong> +62 8572 73500 81<br>
              <strong>Email:</strong> GuruKU@gmail.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Konten Favorit</h4>
            <ul>
              <li><a href="#">Pesan Guru Les SD</a></li>
              <li><a href="#">Pesan Guru Les SMP</a></li>
              <li><a href="#">Pesan Guru Les SMA</a></li>
              <li><a href="#">MateriKU Blog</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>GuruKU</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=NewBiz
        -->
        <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="{{ asset('landing') }}/vendor/jquery/jquery.min.js"></script>
  <script src="{{ asset('landing') }}/vendor/jquery/jquery-migrate.min.js"></script>
  <script src="{{ asset('landing') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('landing') }}/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="{{ asset('landing') }}/vendor/easing/easing.min.js"></script>
  <script src="{{ asset('landing') }}/vendor/mobile-nav/mobile-nav.js"></script>
  <script src="{{ asset('landing') }}/vendor/wow/wow.min.js"></script>
  <script src="{{ asset('landing') }}/vendor/waypoints/waypoints.min.js"></script>
  <script src="{{ asset('landing') }}/vendor/counterup/counterup.min.js"></script>
  <script src="{{ asset('landing') }}/vendor/owlcarousel/owl.carousel.min.js"></script>
  <script src="{{ asset('landing') }}/vendor/isotope/isotope.pkgd.min.js"></script>
  <script src="{{ asset('landing') }}/vendor/lightbox/js/lightbox.min.js"></script>

  <!-- For range slider (using ion range slider) -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.0/js/ion.rangeSlider.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.0/css/ion.rangeSlider.min.css"/>

  <!-- Library for Searching List -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="{{ asset('landing') }}/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="{{ asset('landing') }}/js/main.js"></script>

  <!-- ClockPicker Stylesheet -->
  <link rel="stylesheet" type="text/css" href="{{ asset('landing') }}/vendor/bootstrap/dist/bootstrap-clockpicker.min.css">

  <!-- ClockPicker script -->
  <script src="{{ asset('landing') }}/vendor/bootstrap/dist/bootstrap-clockpicker.min.js"></script>

  @stack('js')

    <!-- Script for Time Date Picker -->
    <script type="text/javascript">
    $(document).ready(function(){
      var date_input=$('input[name="date"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      // var options={
      //   format: 'mm/dd/yyyy',
      //   container: container,
      //   todayHighlight: true,
      //   autoclose: true,
      //   donetext: 'Done'
      // };
      // date_input.datepicker(options);
    })
    </script>

    <script type="text/javascript">
    $('.clockpicker').clockpicker()
	    .find('input').change(function(){
		  // TODO: time changed
		  console.log(this.value);
	  });
    </script>
    
</body>
</html>
