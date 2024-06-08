<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>TickItNow</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/logo ranting.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{ asset('assets/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ asset('assets/lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/lib/animate/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/lib/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

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
          <li><a href="#about">Tentang</a></li>
          <li><a href="#venue">Lokasi</a></li>
          <li><a href="#event">Acara</a></li>
          <li><a href="#gallery">Koleksi</a></li>
          <li><a href="#sponsors">Sponsor</a></li>
          <li><a href="#contact">Kontak</a></li>
          <li class="buy-tickets"><a href="#event">Beli Tiket</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container wow fadeIn">
      <h1 class="mb-4 pb-0">Selalu Siap untuk<br><span>Momen</span> Seru</h1>
      <p class="mb-4 pb-0">Jalan Gubernur H. A. Bastari, Jakabaring, Palembang, Indonesia</p>
      <a href="https://www.youtube.com/watch?v=C1f5cDrkKqw" class="venobox play-btn mb-4" data-vbtype="video"
        data-autoplay="true"></a>
      <a href="#about" class="about-btn scrollto">Tentang Stadium</a>
    </div>
  </section>

  <main id="main">

    <!--==========================
      About Section
    ============================-->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h2>Tentang Stadium</h2>
            <p>Stadion Jakabaring, terletak di Palembang, Sumatera Selatan, adalah salah satu ikon olahraga dan hiburan di Indonesia. Resmi dibuka pada tahun 2004, stadion ini memiliki kapasitas lebih dari 23.000 penonton dan telah menjadi tuan rumah bagi berbagai acara bergengsi, mulai dari pertandingan sepak bola internasional hingga konser musik besar. </p>
            <p>Dirancang dengan fasilitas modern, Stadion Jakabaring menawarkan pengalaman menonton yang tak tertandingi bagi para pengunjung. Dengan tempat duduk yang nyaman, sistem pencahayaan mutakhir, dan akustik yang superior, setiap acara di stadion ini dijamin memberikan kenangan yang tak terlupakan.</p>
            <p>Dengan TickItNow, Anda bisa memastikan tempat Anda di semua acara seru yang diadakan di Stadion Jakabaring. Jangan lewatkan kesempatan untuk menjadi bagian dari momen-momen istimewa dan buat kenangan yang abadi bersama kami!</p>
          </div>

        </div>
      </div>
    </section>

    <!--==========================
      Venue Section
    ============================-->
    <section id="venue" class="wow fadeInUp">

      <div class="container-fluid">

        <div class="section-header">
          <h2>Tempat Acara</h2>
          <p>Informasi tempat acara dan dokumentasi</p>
        </div>

        <div class="row no-gutters">
          <div class="col-lg-6 venue-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15937.135861330298!2d104.7919462!3d-3.0181776!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b9d9421533bd9%3A0x9666a5bb44ec0c8c!2sJakabaring%20Sport%20City!5e0!3m2!1sen!2sid!4v1717837569166!5m2!1sen!2sid" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6 venue-info">
            <div class="row justify-content-center">
              <div class="col-11 col-lg-8">
                <h3>Jakabaring, Palembang, Indonesia</h3>
                <p>Selain sebagai pusat olahraga, kompleks Jakabaring juga dilengkapi dengan berbagai fasilitas pendukung seperti area parkir yang luas, akses transportasi yang mudah, dan berbagai pilihan makanan dan minuman yang lezat. Tak heran jika Stadion Jakabaring menjadi pilihan utama bagi banyak event organizer untuk mengadakan acara mereka.</p>
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="container-fluid venue-gallery-container">
        <div class="row no-gutters">

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="{{ asset('assets/img/venue-gallery/1.jpg') }}" class="venobox" data-gall="venue-gallery">
                <img src="{{ asset('assets/img/venue-gallery/1.jpg') }}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="{{ asset('assets/img/venue-gallery/2.jpg') }}" class="venobox" data-gall="venue-gallery">
                <img src="{{ asset('assets/img/venue-gallery/2.jpg') }}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="{{ asset('assets/img/venue-gallery/3.jpg') }}" class="venobox" data-gall="venue-gallery">
                <img src="{{ asset('assets/img/venue-gallery/3.jpg') }}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="{{ asset('assets/img/venue-gallery/4.jpg') }}" class="venobox" data-gall="venue-gallery">
                <img src="{{ asset('assets/img/venue-gallery/4.jpg') }}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="{{ asset('assets/img/venue-gallery/5.jpg') }}" class="venobox" data-gall="venue-gallery">
                <img src="{{ asset('assets/img/venue-gallery/5.jpg') }}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="{{ asset('assets/img/venue-gallery/6.jpg') }}" class="venobox" data-gall="venue-gallery">
                <img src="{{ asset('assets/img/venue-gallery/6.jpg') }}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="{{ asset('assets/img/venue-gallery/7.jpg') }}" class="venobox" data-gall="venue-gallery">
                <img src="{{ asset('assets/img/venue-gallery/7.jpg') }}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="{{ asset('assets/img/venue-gallery/8.jpg') }}" class="venobox" data-gall="venue-gallery">
                <img src="{{ asset('assets/img/venue-gallery/8.jpg') }}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>
      </div>

    </section>

    <!--==========================
      Events Section
    ============================-->
    <section id="event" class="section-with-bg wow fadeInUp">

      <div class="container">
        <div class="section-header">
          <h2>Acara</h2>
          <p>Gelaran acara menarik yang spektakuler.</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="event">
              <div class="event-img">
                <img src="{{ asset('assets/img/event/1.jpg') }}" alt="Event 1" class="img-fluid" width="350px">
              </div>
              <h3><a href="#">Event 1</a></h3>
              <p>Rp. 100.000,-</p>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, tempore.</p>
            <div class="my-4 text-center">
                <button type="button">Pesan Tiket</button>
            </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="event">
              <div class="event-img">
                <img src="{{ asset('assets/img/event/2.jpg') }}" alt="Event 2" class="img-fluid" width="350px">
              </div>
              <h3><a href="#">Event 2</a></h3>
              <p>Rp. 100.000,-</p>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, tempore.</p>
              <div class="my-4 text-center">
                <button type="button">Pesan Tiket</button>
            </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="event">
              <div class="event-img text-center">
                <img src="{{ asset('assets/img/event/3.png') }}" alt="Event 3" class="img-fluid" width="310px">
              </div>
              <h3><a href="#">Event 3</a></h3>
              <p>Rp. 100.000,-</p>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, tempore.</p>
              <div class="my-4 text-center">
                <button type="button">Pesan Tiket</button>
            </div>
            </div>
          </div>

        </div>
      </div>

    </section>

    <!--==========================
      Gallery Section
    ============================-->
    <section id="gallery" class="wow fadeInUp">

      <div class="container">
        <div class="section-header">
          <h2>Koleksi</h2>
          <p>Koleksi dokumentasi acara</p>
        </div>
      </div>

      <div class="owl-carousel gallery-carousel">
        <a href="{{ asset('assets/img/gallery/1.jpg') }}" class="venobox" data-gall="gallery-carousel"><img src="{{ asset('assets/img/gallery/1.jpg') }}" alt=""></a>
        <a href="{{ asset('assets/img/gallery/2.jpg') }}" class="venobox" data-gall="gallery-carousel"><img src="{{ asset('assets/img/gallery/2.jpg') }}" alt=""></a>
        <a href="{{ asset('assets/img/gallery/3.jpg') }}" class="venobox" data-gall="gallery-carousel"><img src="{{ asset('assets/img/gallery/3.jpg') }}" alt=""></a>
        <a href="{{ asset('assets/img/gallery/4.jpg') }}" class="venobox" data-gall="gallery-carousel"><img src="{{ asset('assets/img/gallery/4.jpg') }}" alt=""></a>
        <a href="{{ asset('assets/img/gallery/5.jpg') }}" class="venobox" data-gall="gallery-carousel"><img src="{{ asset('assets/img/gallery/5.jpg') }}" alt=""></a>
        </div>

    </section>

    <!--==========================
      Sponsors Section
    ============================-->
    <section id="sponsors" class="section-with-bg wow fadeInUp">

      <div class="container">
        <div class="section-header">
          <h2>Sponsors</h2>
        </div>

        <div class="row no-gutters sponsors-wrap clearfix">

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="sponsor-logo">
              <img src="{{ asset('assets/img/sponsors/1.png') }}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="sponsor-logo">
              <img src="{{ asset('assets/img/sponsors/2.png') }}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="sponsor-logo">
              <img src="{{ asset('assets/img/sponsors/3.png') }}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="sponsor-logo">
              <img src="{{ asset('assets/img/sponsors/4.png') }}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="sponsor-logo">
              <img src="{{ asset('assets/img/sponsors/5.png') }}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="sponsor-logo">
              <img src="{{ asset('assets/img/sponsors/6.png') }}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="sponsor-logo">
              <img src="{{ asset('assets/img/sponsors/7.png') }}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="sponsor-logo">
              <img src="{{ asset('assets/img/sponsors/8.png') }}" class="img-fluid" alt="">
            </div>
          </div>

        </div>

      </div>

    </section>

    <!--==========================
      Subscribe Section
    ============================-->
    <section id="subscribe">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h2>Informasi Acara Baru</h2>
          <p>Ayo dapatkan informasi acara terbaru di stadium Jakabaring, Palembang.</p>
        </div>

        <form method="POST" action="#">
          <div class="form-row justify-content-center">
            <div class="col-auto">
              <input type="text" class="form-control" placeholder="Masukkan Email Anda">
            </div>
            <div class="col-auto">
              <button type="submit">Langganan</button>
            </div>
          </div>
        </form>

      </div>
    </section>

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">

      <div class="container">

        <div class="section-header">
          <h2>Hubungi Kami</h2>
          <p>Silahkan kontak kami untuk menanyakan informasi mengenai acara maupun tiket.</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Alamat</h3>
              <address>Jl. Gubernur H. A. Bastari, Jakabaring, Palembang, Indonesia</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Nomor Telepon</h3>
              <p><a href="tel:+155895548855">+628 1234 5678 9000</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@tickitnow.com">info@tickitnow.com</a></p>
            </div>
          </div>

        </div>

        <div class="form">
          <div id="sendmessage">Pesan kamu telah terkirim, terima kasih.</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Nama Anda" data-rule="minlen:4" data-msg="Maaf minimal 4 karakter" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email Anda" data-rule="email" data-msg="Tolong masukkan email yang valid" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subjek" data-rule="minlen:4" data-msg="Tolong masukkan lebih dari 8 karakter" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="Pesan" rows="5" data-rule="required" data-msg="Tolong tuliskan pesan untuk kami" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Kirim Pesan</button></div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->

  </main>


  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-6 col-md-6 footer-info">
            <img src="{{ asset('assets/img/logo.png') }}" alt="TheEvenet">
            <p>TickItNow, solusi terbaik Anda untuk memesan tiket berbagai acara di Stadion Jakabaring! Kami menyediakan platform yang mudah digunakan untuk memastikan Anda tidak ketinggalan momen seru dari konser, pertandingan olahraga, dan acara spektakuler lainnya. Dengan TickItNow, Anda bisa mendapatkan tiket Anda dengan cepat, aman, dan nyaman.</p>
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
              <strong>Email:</strong> info@tickitnow.com<br>
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
        &copy; Copyright <strong>TickItNow</strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer>
  <!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="{{ asset('assets/lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/lib/jquery/jquery-migrate.min.js') }}"></script>
  <script src="{{ asset('assets/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
  <script src="{{ asset('assets/lib/superfish/hoverIntent.js') }}"></script>
  <script src="{{ asset('assets/lib/superfish/superfish.min.js') }}"></script>
  <script src="{{ asset('assets/lib/wow/wow.min.js') }}"></script>
  <script src="{{ asset('assets/lib/venobox/venobox.min.js') }}"></script>
  <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>

  <!-- Contact Form JavaScript File -->
  <script src="{{ asset('assets/contactform/contactform.js') }}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
