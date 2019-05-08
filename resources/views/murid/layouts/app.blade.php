<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>GuruKU | Pesan guru les cepat , mudah , dan terpercaya</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{ asset('landing') }}/img/favicon.png" rel="icon">
  <link href="{{ asset('landing') }}/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:400, 300, 500, 700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{ asset('landing') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

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
        <a href="http://127.0.0.1:8000"><h1 class="scrollto"><span>GuruKU</span></h1></a>
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
        <ul>
          <li><a href="#">Log In</a></li>
          <li><a href="#">Sign Up</a></li>
        </ul>
      </nav>
      <!-- .main-nav -->

    </div>
  </header><!-- #header -->

  <div class="row">
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
  <script src="{{ asset('landing') }}/vendor/easing/easing.min.js"></script>
  <script src="{{ asset('landing') }}/vendor/mobile-nav/mobile-nav.js"></script>
  <script src="{{ asset('landing') }}/vendor/wow/wow.min.js"></script>
  <script src="{{ asset('landing') }}/vendor/waypoints/waypoints.min.js"></script>
  <script src="{{ asset('landing') }}/vendor/counterup/counterup.min.js"></script>
  <script src="{{ asset('landing') }}/vendor/owlcarousel/owl.carousel.min.js"></script>
  <script src="{{ asset('landing') }}/vendor/isotope/isotope.pkgd.min.js"></script>
  <script src="{{ asset('landing') }}/vendor/lightbox/js/lightbox.min.js"></script>


  <!-- Contact Form JavaScript File -->
  <script src="{{ asset('landing') }}/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="{{ asset('landing') }}/js/main.js"></script>

  <!-- Script for Tab on detailGuru Tabs -->
  <script type="text/javascript">
      (function() {

  function activateTab() {
      if(activeTab) {
        resetTab.call(activeTab);
      }
      this.parentNode.className = 'tab tab-active';
      activeTab = this;
      activePanel = document.getElementById(activeTab.getAttribute('href').substring(1));
       activePanel.className = 'tabpanel show';
      activePanel.setAttribute('aria-expanded', true);
    }

    function resetTab() {
      activeTab.parentNode.className = 'tab';
      if(activePanel) {
        activePanel.className = 'tabpanel hide';
        activePanel.setAttribute('aria-expanded', false);
      }
    }

    var doc = document,
        tabs = doc.querySelectorAll('.tab a'),
        panels = doc.querySelectorAll('.tabpanel'),
        activeTab = tabs[0],
        activePanel;

     activateTab.call(activeTab);

    for(var i = tabs.length - 1; i >= 0; i--) {
      tabs[i].addEventListener('click', activateTab, false);
    }

  })();
  </script>

  <!-- Script for Multitab Table -->
  <script type="text/javascript">
      //jQuery time
      var current_fs, next_fs, previous_fs; //fieldsets
      var left, opacity, scale; //fieldset properties which we will animate
      var animating; //flag to prevent quick multi-click glitches

      $(".next").click(function(){
        if(animating) return false;
        animating = true;

        current_fs = $(this).parent();
        next_fs = $(this).parent().next();

        //activate next step on progressbar using the index of next_fs
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

        //show the next fieldset
        next_fs.show();
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
          step: function(now, mx) {
            //as the opacity of current_fs reduces to 0 - stored in "now"
            //1. scale current_fs down to 80%
            scale = 1 - (1 - now) * 0.2;
            //2. bring next_fs from the right(50%)
            left = (now * 50)+"%";
            //3. increase opacity of next_fs to 1 as it moves in
            opacity = 1 - now;
            current_fs.css({
              'transform': 'scale('+scale+')',
              'position': 'absolute'
            });
            next_fs.css({'left': left, 'opacity': opacity});
          },
          duration: 800,
          complete: function(){
            current_fs.hide();
            animating = false;
          },
          //this comes from the custom easing plugin
          easing: 'easeInOutBack'
        });
      });

      $(".previous").click(function(){
        if(animating) return false;
        animating = true;

        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();

        //de-activate current step on progressbar
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

        //show the previous fieldset
        previous_fs.show();
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
          step: function(now, mx) {
            //as the opacity of current_fs reduces to 0 - stored in "now"
            //1. scale previous_fs from 80% to 100%
            scale = 0.8 + (1 - now) * 0.2;
            //2. take current_fs to the right(50%) - from 0%
            left = ((1-now) * 50)+"%";
            //3. increase opacity of previous_fs to 1 as it moves in
            opacity = 1 - now;
            current_fs.css({'left': left});
            previous_fs.css({'transform': 'scale('+scale+')', 'position': 'absolute', 'opacity': opacity});
          },
          duration: 800,
          complete: function(){
            current_fs.hide();
            animating = false;
          },
          //this comes from the custom easing plugin
          easing: 'easeInOutBack'
        });
      });

      $(".submit").click(function(){
        return false;
      })

    </script>

    <!-- Script for Time Date Picker -->
    <script type="text/javascript">
    $(document).ready(function(){
      var date_input=$('input[name="date"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'mm/dd/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
    })
    </script>

</body>
</html>
