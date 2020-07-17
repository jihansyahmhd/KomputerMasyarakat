<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Jihan Jago Hosting</title>
  <meta content="" name="descriptison">
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
  <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}"rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700|Roboto:400,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Bell - v2.1.0
  * Template URL: https://bootstrapmade.com/bell-free-bootstrap-4-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Hero Section ======= -->
  <section class="hero">
    <div class="container text-center">
      <div class="row">
        <div class="col-md-12">
          {{-- <a class="hero-brand" href="index.html" title="Home"><img alt="jihan Logo" src="assets/img/hotel.jpeg"></a> --}}
          {{-- @foreach($images as $key => $slider)
            <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
              <img class="d-block " src="{{($slider)}}" alt="First slide">
            </div>
          @endforeach --}}

          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              @foreach($images as $key => $slider)
                <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                  <img class="d-block " src="{{($slider)}}" alt="First slide">
                </div>
              @endforeach
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>

      <div class="col-md-12">
        <h1>
          APLIKASI PERHOTELAN
        </h1>

        <p class="tagline">
          Ulas Kami di website Kami
        </p>
        <a class="btn btn-full scrollto" href="#about">Get Started Now</a>
      </div>
    </div>

  </section><!-- End Hero -->

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="index.html"><img src="assets/img/hotel.jpeg" alt=""></a>

        <!-- Uncomment below if you prefer to use a text image -->
        <!--<h1><a href="#hero">Bell</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="#about">About Us</a></li>
          <li><a href="#features">Features</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#team">Team</a></li>
          <li class="menu-has-children"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="menu-has-children"><a href="#">Drop Down 2</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact Us</a></li>
        </ul>
      </nav>
      <!-- #nav-menu-container -->

      <nav class="nav social-nav pull-right d-none d-lg-inline">
        <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i class="fa fa-envelope"></i></a>
      </nav>
    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section class="about" id="about">

      <div class="container text-center">
        <h2>
          Tentang Kami
        </h2>

        <p>
          Bisa Anda Kunjungi
        </p>
{{--
        <div class="row stats-row">
          <div class="stats-col text-center col-md-3 col-sm-6">
            <div class="circle">
              <span src="assets/img/hotel.jpeg"></span> Satisfied Customers
            </div>
          </div>

          <div class="stats-col text-center col-md-3 col-sm-6">
            <div class="circle">
              <span class="stats-no" data-toggle="counter-up">79</span> Released Projects
            </div>
          </div>

          <div class="stats-col text-center col-md-3 col-sm-6">
            <div class="circle">
              <span class="stats-no" data-toggle="counter-up">1,463</span> Hours Of Support
            </div>
          </div> --}}
{{--
          <div class="stats-col text-center col-md-3 col-sm-6">
            <div class="circle">
              <span class="stats-no" data-toggle="counter-up">15</span> Hard Workers
            </div>
          </div>
        </div>
      </div> --}}

    </section><!-- End About Section -->

    <!-- ======= Welcome Section ======= -->
    {{-- <section class="welcome text-center">
      <h2>Welcome to Website</h2>
      <p>
        Berbagai Fitur Website Hotel Kami.

      </p>
    </section><!-- End Welcome Section --> --}}

    <!-- ======= Features Section ======= -->
    <section class="rumah" id="rumah">

      <div class="container">

        <div class="section-title">
          <h2>KATEGORI RUMAH</h2>
          <p>DAFTAR KATEGORI</p>
        </div>
        <div class="row">

        @forelse ($rumahs as $rumah)

          <div class="col-lg-6">
            <div class="member d-flex align-items-start">
              <img src="{{ asset('storage/'.$rumah->image ) }}" alt="">
              <div class="member-info">
                <h4>{{ $rumah->nama_Rumah }}</h4>
                <span>{{$rumah->alamat}}</span>
                <br>
                <span><a href={{ $rumah->maps_link }}>Buka di google Maps</a></span>
                <br>
                <span>Kamar      : {{ $rumah->jml_kamar }}</span>
                <br>
                <span>Kamar mandi: {{ $rumah->jml_kamarmandi }}</span>
                <br>
                <span>Garasi     : {{ $rumah->jml_garasi }}</span>
                <br>
                <span>Ruang Tamu : {{ $rumah->jml_ruangtamu }}</span>
                <br>
                <span>Fasilitas  : {{ $rumah->fasilitas }}</span>
                <br>
              </div>
            </div>
          </div>
            {{-- <div class="product">
                <a href="{{ route('shop.show', $product->slug) }}"><img src="{{ productImage($product->image) }}" alt="product"></a>
                <a href="{{ route('shop.show', $product->slug) }}"><div class="product-name">{{ $product->name }}</div></a>
                <div class="product-price">{{ $product->presentPrice() }}</div>
            </div> --}}
        @empty
            <div style="text-align: left">No items found</div>
        @endforelse
      </div>

    </section><!-- End Features Section -->

    <!-- ======= Call to Action Section ======= -->
    <section class="cta">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 col-sm-12 text-lg-left text-center">
            <h2>
              Jika Kalian Minat ?
            </h2>

            <p>
              Hubungi Admin Server Kami
            </p>
          </div>

          <div class="col-lg-3 col-sm-12 text-lg-right text-center">
            <a class="btn btn-ghost" href="#">Admin</a>
          </div>
        </div>
      </div>
    </section><!-- End Call to Action Section -->

    <!-- ======= Portfolio Section ======= -->
    {{-- <section class="portfolio" id="portfolio">

      <div class="container text-center">
        <h2>
          Portfolio
        </h2>

        <p>
          DAFTAR MENU
        </p>
      </div> --}}

      {{-- <div class="portfolio-grid">
        <div class="row">
          <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="card card-block">
              <a href="assets/img/porf-1.jpg" class="venobox" data-gall="portfolioGallery"><img alt="" src="assets/img/animasi1.jpg">
                <div class="portfolio-over">
                  <div>
                    <h3 class="card-title">
                      The Dude Rockin'
                    </h3>

                    <p class="card-text">
                      Lorem ipsum dolor sit amet, eu sed suas eruditi honestatis.
                    </p>
                  </div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="card card-block">
              <a href="assets/img/porf-2.jpg" class="venobox" data-gall="portfolioGallery"><img alt="" src="assets/img/porf-2.jpg">
                <div class="portfolio-over">
                  <div>
                    <h3 class="card-title">
                      The Dude Rockin'
                    </h3>

                    <p class="card-text">
                      Lorem ipsum dolor sit amet, eu sed suas eruditi honestatis.
                    </p>
                  </div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="card card-block">
              <a href="assets/img/porf-3.jpg" class="venobox" data-gall="portfolioGallery"><img alt="" src="assets/img/porf-3.jpg">
                <div class="portfolio-over">
                  <div>
                    <h3 class="card-title">
                      The Dude Rockin'
                    </h3>

                    <p class="card-text">
                      Lorem ipsum dolor sit amet, eu sed suas eruditi honestatis.
                    </p>
                  </div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="card card-block">
              <a href="assets/img/porf-4.jpg" class="venobox" data-gall="portfolioGallery"><img alt="" src="assets/img/porf-4.jpg">
                <div class="portfolio-over">
                  <div>
                    <h3 class="card-title">
                      The Dude Rockin'
                    </h3>

                    <p class="card-text">
                      Lorem ipsum dolor sit amet, eu sed suas eruditi honestatis.
                    </p>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="card card-block">
              <a href="assets/img/porf-5.jpg" class="venobox" data-gall="portfolioGallery"><img alt="" src="assets/img/porf-5.jpg">
                <div class="portfolio-over">
                  <div>
                    <h3 class="card-title">
                      The Dude Rockin'
                    </h3>

                    <p class="card-text">
                      Lorem ipsum dolor sit amet, eu sed suas eruditi honestatis.
                    </p>
                  </div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="card card-block">
              <a href="assets/img/porf-6.jpg" class="venobox" data-gall="portfolioGallery"><img alt="" src="assets/img/porf-6.jpg">
                <div class="portfolio-over">
                  <div>
                    <h3 class="card-title">
                      The Dude Rockin'
                    </h3>

                    <p class="card-text">
                      Lorem ipsum dolor sit amet, eu sed suas eruditi honestatis.
                    </p>
                  </div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="card card-block">
              <a href="assets/img/porf-7.jpg" class="venobox" data-gall="portfolioGallery"><img alt="" src="assets/img/porf-7.jpg">
                <div class="portfolio-over">
                  <div>
                    <h3 class="card-title">
                      The Dude Rockin'
                    </h3>

                    <p class="card-text">
                      Lorem ipsum dolor sit amet, eu sed suas eruditi honestatis.
                    </p>
                  </div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="card card-block">
              <a href="assets/img/porf-8.jpg" class="venobox" data-gall="portfolioGallery"><img alt="" src="assets/img/porf-8.jpg">
                <div class="portfolio-over">
                  <div>
                    <h3 class="card-title">
                      The Dude Rockin'
                    </h3>

                    <p class="card-text">
                      Lorem ipsum dolor sit amet, eu sed suas eruditi honestatis.
                    </p>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Portfolio Section --> --}}

    <!-- ======= Team Section ======= -->
    <section class="team" id="team">
      <div class="container">
        <h2 class="text-center">
          Meet our team
        </h2>

        <div class="row">
          <div class="col-sm-3 col-xs-6">
            <div class="card card-block">
              <a href="#"><img alt="" class="team-img" src="assets/img/Jihan.jpeg">
                <div class="card-title-wrap">
                  <span class="card-title">Muhamad Jihansyah</span> <span class="card-text">Direktur</span>
                </div>

                <div class="team-over">
                  <h4 class="hidden-md-down">
                    Connect with me
                  </h4>

                  <nav class="social-nav">
                    <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i class="fa fa-envelope"></i></a>
                  </nav>

                  <p>
                    Lorem ipsum dolor sit amet, eu sed suas eruditi honestatis.
                  </p>
                </div>
              </a>
            </div>
          </div>

          <div class="col-sm-3 col-xs-6">
            <div class="card card-block">
              <a href="#"><img alt="" class="team-img" src="assets/img/aldo.jpeg">
                <div class="card-title-wrap">
                  <span class="card-title">Aldo Coconut</span> <span class="card-text">Marketing</span>
                </div>

                <div class="team-over">
                  <h4 class="hidden-md-down">
                    Connect with me
                  </h4>

                  <nav class="social-nav">
                    <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i class="fa fa-envelope"></i></a>
                  </nav>

                  <p>

                  </p>
                </div>
              </a>
            </div>
          </div>

          <div class="col-sm-3 col-xs-6">
            <div class="card card-block">
              <a href="#"><img alt="" class="team-img" src="assets/img/Daniel.jpeg">
                <div class="card-title-wrap">
                  <span class="card-title">Daniel Pedrosa</span> <span class="card-text">Desain</span>
                </div>

                <div class="team-over">
                  <h4 class="hidden-md-down">
                    Connect with me
                  </h4>

                  <nav class="social-nav">
                    <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i class="fa fa-envelope"></i></a>
                  </nav>

                  <p>
                    Lorem ipsum dolor sit amet, eu sed suas eruditi honestatis.
                  </p>
                </div>
              </a>
            </div>
          </div>

          {{-- <div class="col-sm-3 col-xs-6">
            <div class="card card-block">
              <a href="#"><img alt="" class="team-img" src="assets/img/team-4.jpg">
                <div class="card-title-wrap">
                  <span class="card-title">Sergio Fez</span> <span class="card-text">Art Director</span>
                </div>

                <div class="team-over">
                  <h4 class="hidden-md-down">
                    Connect with me
                  </h4>

                  <nav class="social-nav">
                    <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i class="fa fa-envelope"></i></a>
                  </nav> --}}

                  <p>
                    Lorem ipsum dolor sit amet, eu sed suas eruditi honestatis.
                  </p>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="section-title">Contact Us</h2>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-3 col-md-4">
            <div class="info">
              <div>
                <i class="fa fa-map-marker"></i>
                <p>Mandiri 3 Pondok Betung<br>Tangerang Selatan, 12250</p>
              </div>

              <div>
                <i class="fa fa-envelope"></i>
                <p>jihanmuhamad1@gmail.com</p>
              </div>

              <div>
                <i class="fa fa-phone"></i>
                <p>+62 87878144347</p>
              </div>

            </div>
          </div>

          <div class="col-lg-5 col-md-8">
            <div class="form">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validate"></div>
                </div>
                <div class="mb-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer class="site-footer">
    <div class="bottom">
      <div class="container">
        <div class="row">

          <div class="col-lg-6 col-xs-12 text-lg-left text-center">
            <p class="copyright-text">
              &copy; Copyright <strong>HANS</strong>. All Rights Reserved
            </p>
            <div class="credits">
              <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Bell
            -->
              Designed by <a href="https://bootstrapmade.com/">Patonglai</a>
            </div>
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
                <a href="#features">Features</a>
              </li>

              <li class="list-inline-item">
                <a href="#portfolio">Portfolio</a>
              </li>

              <li class="list-inline-item">
                <a href="#team">Team</a>
              </li>

              <li class="list-inline-item">
                <a href="#contact">Contact</a>
              </li>
            </ul>
          </div>

        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a class="scrolltop" href="#"><span class="fa fa-angle-up"></span></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/tether/js/tether.min.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/lockfixed/jquery.lockfixed.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/superfish/superfish.min.js"></script>
  <script src="assets/vendor/hoverIntent/hoverIntent.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
