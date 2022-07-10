<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ $siteName}}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="57x57" href="{{ '/img/apple-icon-57x57.png' }}">
  <link rel="apple-touch-icon" sizes="60x60" href="{{ '/img/apple-icon-60x60.png' }}">
  <link rel="apple-touch-icon" sizes="72x72" href="{{ '/img/apple-icon-72x72.png' }}">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ '/img/apple-icon-76x76.png' }}">
  <link rel="apple-touch-icon" sizes="114x114" href="{{ '/img/apple-icon-114x114.png' }}">
  <link rel="apple-touch-icon" sizes="120x120" href="{{ '/img/apple-icon-120x120.png' }}">
  <link rel="apple-touch-icon" sizes="144x144" href="{{ '/img/apple-icon-144x144.png' }}">
  <link rel="apple-touch-icon" sizes="152x152" href="{{ '/img/apple-icon-152x152.png' }}">
  <link rel="apple-touch-icon" sizes="180x180" href="{{ '/img/apple-icon-180x180.png' }}">
  <link rel="icon" type="image/png" sizes="192x192"  href="{{ '/img/android-icon-192x192.png' }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ '/img/favicon-32x32.png' }}">
  <link rel="icon" type="image/png" sizes="96x96" href="{{ '/img/favicon-96x96.png' }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ '/img/favicon-16x16.png' }}">
  <link rel="manifest" href="{{ '/img/manifest.json' }}">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700|Roboto:400,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Bell - v4.6.0
  * Template URL: https://bootstrapmade.com/bell-free-bootstrap-4-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div class="container text-center">

      <div class="col-md-12">
        <h1>
          Musyafir Site
        </h1>

        <p class="tagline">
          Website ini Merupakan Implementasi dari Tugas Ujian Akhir Semester <br>
          Mata Kuliah Pemrograman Web Lanjut.
        </p>
        @auth
        <a href="/dashboard" class="btn btn-info">Dashboard</a>
        @endauth
        @guest
        <a class="btn btn-full scrollto" href="/login">Silahkan Login</a>
        @endguest
      </div>
    </div>

  </section><!-- End Hero -->

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div id="logo" class="me-auto">
        <a href="index.html"><img src="/assets/img/logo-nav.png" alt=""></a>
        <!-- Uncomment below if you prefer to use a text image -->
        <!--<h1><a href="#hero">Bell</a></h1>-->
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#crew">Crew</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links d-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section class="about" id="about">

      <div class="container text-center">
        <h2>
          About Me
        </h2>

        <p>
          Hi, nama saya adalah <strong>Mohammad Rizqi Maulana (201240001073)</strong>, saya lahir di <strong>Jepara</strong>, dan saya berumur <strong>22</strong> tahun.
          Saya seorang Developer Web yang memiliki pengalaman bekerja di <strong>PT. Indomarco Prismatama</strong> sebagai <strong>FrontEnd Developer</strong>.
          Saat ini saya sedang menempuh <strong>Pendidikan Teknik Informatika</strong> di <strong>Universitas Islam Nahdlatul Ulama Jepara</strong>.
        </p>

        <div class="row stats-row">
          <div class="stats-col text-center col-md-4 col-sm-6">
            <div class="circle">
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter stats-no"></span>
              Customers
            </div>
          </div>

          <div class="stats-col text-center col-md-4 col-sm-6">
            <div class="circle">
              <span data-purecounter-start="0" data-purecounter-end="79" data-purecounter-duration="1" class="purecounter stats-no"></span>
              Projects
            </div>
          </div>

          <div class="stats-col text-center col-md-4 col-sm-6">
            <div class="circle">
              <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter stats-no"></span>
              Hours Of Support
            </div>
          </div>
          
        </div>
      </div>

    </section><!-- End About Section -->

    <!-- ======= Team Section ======= -->
    <section class="team" id="crew">
      <div class="container">
        <h2 class="text-center">
          Meet Our Crew
        </h2>

        <div class="row text-center mx-auto">
          <div class="col-8 mx-auto">
            <div class="row">
              <div class="col-sm-6 col-xs-12">
                <div class="card card-block">
                  <a href="#"><img alt="" class="team-img" src="/assets/img/anjay.jpeg">
                    <div class="card-title-wrap">
                      <span class="card-title">Rizqi Maulana</span> <span class="card-text">Orang paling Vandai</span>
                    </div>
    
                    <div class="team-over">
                      <h4 class="hidden-md-down">
                        Connect With Me
                      </h4>
    
                      <nav class="social-nav">
                        <a href="#"><i class="bi bi-twitter"></i></a> <a href="#"><i class="bi bi-facebook"></i></a> <a href="#"><i class="bi bi-linkedin"></i></a> <a href="#"><i class="bi bi-envelope-fill"></i></a>
                      </nav>
    
                      <p>
                        Developer website Musyafir Site.
                      </p>
                    </div>
                  </a>
                </div>
              </div>
    
              <div class="col-sm-6 col-xs-12">
                <div class="card card-block">
                  <a href="#"><img alt="" class="team-img" src="https://avatars.githubusercontent.com/u/55420857?v=4">
                    <div class="card-title-wrap">
                      <span class="card-title">Virgiawan</span> <span class="card-text">Orang paling Tamvan</span>
                    </div>
    
                    <div class="team-over">
                      <h4 class="hidden-md-down">
                        Connect With Me
                      </h4>
    
                      <nav class="social-nav">
                        <a href="#"><i class="bi bi-twitter"></i></a> <a href="#"><i class="bi bi-facebook"></i></a> <a href="#"><i class="bi bi-linkedin"></i></a> <a href="#"><i class="bi bi-envelope-fill"></i></a>
                      </nav>
    
                      <p>
                        Trainer Developer Musyafir Site.
                      </p>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Team Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer class="site-footer">
    <div class="bottom">
      <div class="container">
        <div class="row">

          <div class="col-lg-6 col-xs-12 text-lg-start text-center">
            <p class="copyright-text">
              &copy; Copyright <strong>Musyafir Site</strong>. All Rights Reserved
            </p>

          </div>

          <div class="col-lg-6 col-xs-12 text-lg-right text-center">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="index.html">Home</a>
              </li>

              <li class="list-inline-item">
                <a href="#about">About Us</a>
              </li>

              <li class="list-inline-item">
                <a href="#crew">Crew</a>
              </li>
            </ul>
          </div>

        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/assets/vendor/purecounter/purecounter.js"></script>
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/assets/js/main.js"></script>

</body>

</html>