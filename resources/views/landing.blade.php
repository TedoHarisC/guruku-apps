@extends('landing.app')

@section('content')
<!--==========================
    Sesi Jumbotron (Header)
  ============================-->
  @include('landing.section.jumbotron')
  <!-- Jumbotron Selesai -->

  <main id="main">

    <!--==========================
      Sesi About Us
    ============================-->
    @include('landing.section.aboutus')
    <!-- AboutUs Selesai -->

    <!--==========================
      Sesi Pelayanan (Servis yang disediakan)
    ============================-->
    @include('landing.section.service')
    <!-- Service selesai -->

    <!--==========================
      Sesi Why Us (Apa keunggulan kita)
    ============================-->
    @include('landing.section.materiku')

    <!--==========================
      Sesi Portfolio
    ============================-->
    <!-- @include('landing.section.portfolio') -->
    <!-- #portfolio -->

    <!--==========================
      Sesi Testimoni
    ============================-->
    @include('landing.section.testimoni')
   <!-- #testimonials -->

    <!-- ==========================
      Sesi Team Developer
    ============================-->
    <!-- @include('landing.section.team') -->
    <!-- #team -->

    <!--==========================
      Sesi Clients
    ============================-->
    @include('landing.section.pengajar')

    <!--==========================
      Sesi Contact
    ============================-->
    @include('landing.section.contact')
   <!-- #contact -->

  </main>
  @endsection