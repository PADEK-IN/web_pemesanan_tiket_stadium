<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>{{ config('app.name', 'Laravel') }}</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/img/favicon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{ asset('assets/user/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ asset('assets/user/lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/user/lib/animate/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/user/lib/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/user/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{ asset('assets/user/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/user/css/custom.css') }}" rel="stylesheet">

</head>

<body>
  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
        <a href="#intro" class="scrollto"><img src="{{ asset('assets/img/logo.png') }}" alt="" title=""></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Beranda</a></li>
          <li><a href="/#about">Tentang</a></li>
          <li><a href="/#venue">Lokasi</a></li>
          <li><a href="/#event">Acara</a></li>
          <li><a href="/#gallery">Koleksi</a></li>
          <li><a href="/#sponsors">Sponsor</a></li>
          <li><a href="/#contact">Kontak</a></li>
          <li class="buy-tickets"><a href="{{ route('login') }}">Masuk</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!-- content -->
  {{ $slot }}
  <!-- end content -->

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-6 col-md-6 footer-info">
            <img src="{{ asset('assets/img/logo.png') }}" alt="TakeItNow">
            <p>TakeItNow, solusi terbaik Anda untuk memesan tiket brbagai acara di Stadion Jakabaring! Kami menyediakan platform yang mudah digunakan untuk memastikan Anda tidak ketinggalan momen seru dari konser, pertandingan olahraga, dan acara spektakuler lainnya. Dengan TakeItNow, Anda bisa mendapatkan tiket Anda dengan cepat, aman, dan nyaman.</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Menu</h4>
            <ul>
              <li><i class="fa fa-angle-right"></i> <a href="#">Beranda</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Tentang Kami</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Layanan</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Persyaratan layanan</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Kebijakan pribadi</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Hubungi Kami</h4>
            <p>
              Jl. Gubernur H. A. Bastari<br>
              Jakabaring, Palembang<br>
              Indonesia <br>
              <strong>Telepon:</strong> +628 1234 5678 9000<br>
              <strong>Email:</strong> info@takeitnow.com<br>
            </p>

            <div class="social-links">
              <a href="https://x.com/" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="https://id-id.facebook.com/ class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="https://www.instagram.com/" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="https://www.linkedin.com/" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>TakeItNow</strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer>
  <!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="{{ asset('assets/user/lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/user/lib/jquery/jquery-migrate.min.js') }}"></script>
  <script src="{{ asset('assets/user/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/user/lib/easing/easing.min.js') }}"></script>
  <script src="{{ asset('assets/user/lib/superfish/hoverIntent.js') }}"></script>
  <script src="{{ asset('assets/user/lib/superfish/superfish.min.js') }}"></script>
  <script src="{{ asset('assets/user/lib/wow/wow.min.js') }}"></script>
  <script src="{{ asset('assets/user/lib/venobox/venobox.min.js') }}"></script>
  <script src="{{ asset('assets/user/lib/owlcarousel/owl.carousel.min.js') }}"></script>

  <!-- Contact Form JavaScript File -->
  <script src="{{ asset('assets/user/contactform/contactform.js') }}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{ asset('assets/user/js/main.js') }}"></script>
</body>

</html>
