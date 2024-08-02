<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Global Supply Chain - Project Details</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../../assets/img/favicon.png" rel="icon">
    <link href="../../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{('../../assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{('../../assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{('../../assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="{{('../../assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{('../../assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{('../../assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{('../../assets/css/main.css')}}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: UpConstruction - v1.3.0
    * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
  </head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{route('index',app()->getLocale())}}" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="{{('../../asset/img/logo.png')}}" alt=""> -->
        <h1>Global Supply Chain<span>.</span></h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{route('index',app()->getLocale())}}">{{ __('header.home') }}</a></li>
          <li><a href="{{route('about.index',app()->getLocale())}}">{{ __('header.about') }}</a></li>
          <li class="dropdown"><a href="#"><span>{{ __('header.language') }}</span> <i
            class="bi bi-chevron-down dropdown-indicator"></i></a>
        <ul>
          <li><a href="{{ route('about.project', ['locale' => 'en', 'id' => $project->id]) }}">{{ __('header.english') }}</a></li>
          <li><a href="{{ route('about.project', ['locale' => 'ar', 'id' => $project->id]) }}">{{ __('header.arabic') }}</a></li>
        </ul>
      </li>
      <li><a href="https://forms.gle/snsrifCMVtwBQGcR7">{{ __('header.button1') }}</a></li>
          <li><a href="https://forms.gle/uPeJ4Ur5jQiRYhQ67">{{ __('header.button2') }}</a></li>

        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('../../asset/img/breadcrumbs-bg.jpg');" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>{{ __('header.project_details') }}</h2>
        <ol>
          <li><a href="{{route('index',app()->getLocale())}}">{{ __('header.home') }}</a></li>
          <li>{{ __('header.project_details') }}</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Projet Details Section ======= -->
    <section id="project-details" class="project-details" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="position-relative h-100">
          <div class="slides-1 portfolio-details-slider swiper">
            <div class="swiper-wrapper align-items-center">
                @foreach ($project->images as $image )

                <div class="swiper-slide">
                  <img src="{{ asset('storage/uploads/' . basename($image->image)) }}" alt="">
                </div>
                @endforeach

            </div>
            <div class="swiper-pagination"></div>
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>

        </div>

        <div class="row justify-content-between gy-4 mt-4">

          <div class="col-lg-8">
            <div class="portfolio-description">
              <h2>{{$project->localized_title}}</h2>
              <p>
                {{$project->localized_description}}
              </p>

            </div>
          </div>



        </div>

      </div>
    </section><!-- End Projet Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

    <div class="footer-content position-relative">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>Global Supply Chain</h3>
              <p>
                {{ __('contact.address') }}
                <br><br>
                <strong>Phone:</strong> {{ __('contact.phone1') }}, {{ __('contact.phone2') }}<br>
                <strong>Email:</strong> {{ __('contact.email') }}<br>
              </p>
              {{-- <div class="social-links d-flex mt-3">
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-twitter"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-linkedin"></i></a>
              </div> --}}
            </div>
          </div><!-- End footer info column-->

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Useful Links</h4>
            <ul>
                <li><a href="{{route('index',app()->getLocale())}}">{{ __('header.home') }}</a></li>
                <li><a href="{{route('about.index',app()->getLocale())}}">{{ __('header.about') }}</a></li>
            </ul>
          </div><!-- End footer links column-->





        </div>
      </div>
    </div>

    <div class="footer-legal text-center position-relative">
      <div class="container">
        <div class="copyright">
          &copy; Copyright. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/ -->
        </div>
      </div>
    </div>

  </footer>
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{('../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{('../../assets/vendor/aos/aos.js')}}"></script>
  <script src="{{('../../assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{('../../assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{('../../assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{('../../assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{('../../assets/vendor/php-email-form/validate.js')}}"></script>


  <!-- Template Main JS File -->
  <script src="{{('../../assets/js/main.js')}}"></script>
</body>

</html>
