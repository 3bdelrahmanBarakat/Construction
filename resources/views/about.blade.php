<!DOCTYPE html >
<html lang="en" >

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Global Supply Chain - About</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{('../assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{('../assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{('../assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
  <link href="{{('../assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{('../assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{('../assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{('../assets/css/main.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: UpConstruction - v1.3.0
  * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body >

    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

          <a href="{{route('index',app()->getLocale())}}" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="{{('assets/img/logo.png')}}" alt=""> -->
            <h1>Global Supply Chain<span>.</span></h1>
          </a>

          <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
          <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
          <nav id="navbar" class="navbar">
            <ul>
              <li><a href="{{route('index',app()->getLocale())}}">{{ __('header.home') }}</a></li>
              <li><a href="{{route('about.index',app()->getLocale())}}" class="active">{{ __('header.about') }}</a></li>
              <li class="dropdown"><a href="#"><span>{{ __('header.language') }}</span> <i
                class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="{{route('about.index','en')}}">{{ __('header.english') }}</a></li>
              <li><a href="{{route('about.index','ar')}}">{{ __('header.arabic') }}</a></li>
            </ul>
          </li>
          <li><a href="https://forms.gle/snsrifCMVtwBQGcR7" class="btn custom-btn">{{ __('header.button1') }}</a></li>
          <li><a href="https://forms.gle/uPeJ4Ur5jQiRYhQ67" class="btn custom-btn">{{ __('header.button2') }}</a></li>

            </ul>
          </nav><!-- .navbar -->

        </div>
      </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url({{('../assets/img/breadcrumbs-bg.jpg')}});">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>{{ __('header.about') }}</h2>
        <ol>
          <li><a href="{{route('index',app()->getLocale())}}">{{ __('header.home') }}</a></li>
          <li>{{ __('header.about') }}</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    {{-- <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row position-relative">

          <div class="col-lg-7 about-img" style="background-image: url({{('../assets/img/about.jpg')}});"></div>

          <div class="col-lg-7">
            <h2>Consequatur eius et magnam</h2>
            <div class="our-story">
              <h4>Est 1988</h4>
              <h3>Our Story</h3>
              <p>Inventore aliquam beatae at et id alias. Ipsa dolores amet consequuntur minima quia maxime autem.
                Quidem id sed ratione. Tenetur provident autem in reiciendis rerum at dolor. Aliquam consectetur
                laudantium temporibus dicta minus dolor.</p>
              <ul>
                <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea commo</span></li>
                <li><i class="bi bi-check-circle"></i> <span>Duis aute irure dolor in reprehenderit in</span></li>
                <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea</span></li>
              </ul>
              <p>Vitae autem velit excepturi fugit. Animi ad non. Eligendi et non nesciunt suscipit repellendus porro in
                quo eveniet. Molestias in maxime doloremque.</p>

              <div class="watch-video d-flex align-items-center position-relative">
                <i class="bi bi-play-circle"></i>
                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox stretched-link">Watch Video</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- End About Section --> --}}

    <!-- ======= Stats Counter Section ======= -->
    {{-- <section id="stats-counter" class="stats-counter section-bg">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-emoji-smile color-blue flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                  class="purecounter"></span>
                <p>Happy Clients</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-journal-richtext color-orange flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                  class="purecounter"></span>
                <p>Projects</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-headset color-green flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1"
                  class="purecounter"></span>
                <p>Hours Of Support</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-people color-pink flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1"
                  class="purecounter"></span>
                <p>Hard Workers</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>
    </section><!-- End Stats Counter Section --> --}}

    <section id="video-section" class="video-section">
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="{{$video->localized_description}}" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Video Section -->

    <!-- ======= Alt Services Section ======= -->
    <section id="alt-services" class="alt-services" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
      <div class="container" data-aos="fade-up">

        <div class="row justify-content-around gy-4">
          <div class="col-lg-6 img-bg" style="background-image: url({{('../assets/img/Picture1.jpg')}});" data-aos="zoom-in"
            data-aos-delay="100"></div>

          <div class="col-lg-5 d-flex flex-column justify-content-center">
            <h3>{{ __('about.title') }}</h3>
            <h4>{{ __('about.name') }}</h4>
            <p>{{ __('about.description') }}</p>


          </div>
        </div>

      </div>
    </section><!-- End Alt Services Section -->

    <!-- ======= Alt Services Section 2 ======= -->
    <section id="alt-services-2" class="alt-services section-bg" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
      <div class="container" data-aos="fade-up">

        <div class="row justify-content-around gy-4">
          <div class="col-lg-5 d-flex flex-column justify-content-center">
            <h3>{{ __('intro.title') }}</h3>
            <p>{{ __('intro.description1') }}</p>
            <p>{{ __('intro.description2') }}</p>

            @if (app()->getLocale() == "en")
            <p>{{ __('intro.description3') }}</p>
            <p>{{ __('intro.description4') }}</p>
            <p>{{ __('intro.description5') }}</p>
            <p>{{ __('intro.description6') }}</p>
            @endif

            {{-- <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
              <i class="bi bi-easel flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Lorem Ipsum</a></h4>
                <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate
                  non provident</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-patch-check flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Nemo Enim</a></h4>
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                  deleniti atque</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-brightness-high flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Dine Pad</a></h4>
                <p>Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut deserunt minus
                  aut eligendi omnis</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-brightness-high flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Tride clov</a></h4>
                <p>Est voluptatem labore deleniti quis a delectus et. Saepe dolorem libero sit non aspernatur odit amet.
                  Et eligendi</p>
              </div>
            </div><!-- End Icon Box --> --}}
          </div>

          <div class="col-lg-6 img-bg" style="background-image: url({{('../assets/img/meeting.jpg')}});" data-aos="zoom-in"
            data-aos-delay="100"></div>
        </div>

      </div>
    </section><!-- End Alt Services Section 2 -->

    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter section-bg">
        <div class="container">

          <div class="row gy-4">

            <div class="col-lg-3 col-md-6">
              <div class="stats-item d-flex align-items-center w-100 h-100">
                <i class="bi bi-emoji-smile color-blue flex-shrink-0"></i>
                <div>
                  <span data-purecounter-start="0" data-purecounter-end="154" data-purecounter-duration="1"
                    class="purecounter"></span>
                  <p>Happy Clients</p>
                </div>
              </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
              <div class="stats-item d-flex align-items-center w-100 h-100">
                <i class="bi bi-journal-richtext color-orange flex-shrink-0"></i>
                <div>
                  <span data-purecounter-start="0" data-purecounter-end="208" data-purecounter-duration="1"
                    class="purecounter"></span>
                  <p>Projects</p>
                </div>
              </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
              <div class="stats-item d-flex align-items-center w-100 h-100">
                <i class="bi bi-headset color-green flex-shrink-0"></i>
                <div>
                  <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1"
                    class="purecounter"></span>
                  <p>Hours Of Support</p>
                </div>
              </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
              <div class="stats-item d-flex align-items-center w-100 h-100">
                <i class="bi bi-people color-pink flex-shrink-0"></i>
                <div>
                  <span data-purecounter-start="0" data-purecounter-end="40" data-purecounter-duration="1"
                    class="purecounter"></span>
                  <p>Hard Workers</p>
                </div>
              </div>
            </div><!-- End Stats Item -->

          </div>

        </div>
      </section><!-- End Stats Counter Section -->

    <!-- ======= Alt Services Section 3 ======= -->
    <section id="alt-services-3" class="alt-services section-bg" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
      <div class="container" data-aos="fade-up">

        <div class="row justify-content-around gy-4">
          <div class="col-lg-5 d-flex flex-column justify-content-center">
            <h3>{{ __('vision.title') }}</h3>
            <p>{{ __('vision.description') }}</p>

          </div>

          <div class="col-lg-6 img-bg" style="background-image: url({{('../assets/img/vision.jpg')}});" data-aos="zoom-in"
            data-aos-delay="100"></div>
        </div>

      </div>
    </section><!-- End Alt Services Section 3 -->

            <!-- ======= Alt Services Section ======= -->
            <section id="alt-services" class="alt-services" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
                <div class="container" data-aos="fade-up">

                  <div class="row justify-content-around gy-4">
                    <div class="col-lg-6 img-bg" style="background-image: url({{('../assets/img/mission.jpg')}});" data-aos="zoom-in"
                      data-aos-delay="100"></div>

                    <div class="col-lg-5 d-flex flex-column justify-content-center">
                      <h3>{{ __('mission.title') }}</h3>
                      <p>{{ __('mission.description1') }}</p>
                      <p>{{ __('mission.description2') }}</p>
                      <p>{{ __('mission.description3') }}</p>


                    </div>
                  </div>

                </div>
              </section><!-- End Alt Services Section -->

    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>{{$customers->localized_title}}</h2>


        <div class="row gy-5">

          @foreach ($customers->images as $image)
          <div class="col-lg-3 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
            <div class="member-img">
              <img src="{{ asset('storage/uploads/' . basename($image->image)) }}" class="img-fluid" alt="">

            </div>
          </div><!-- End Team Member -->
          @endforeach




        </div>

      </div>
    </section><!-- End Our Team Section -->

    <!-- ======= Our Projects Section ======= -->
    <section id="projects" class="projects" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
        <div class="container" data-aos="fade-up">

          <div class="section-header">
            <h2>{{$certificates->localized_title}}</h2>
          </div>

          <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
            data-portfolio-sort="original-order">



            <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200" >

              @foreach ($certificates->images as $image)
              {{-- <img src="{{ asset('storage/uploads/' . basename($detail->images->first()->image)) }}" alt="{{ $detail->localized_title }}" style="width: 40px; height: 40px;"> --}}
              <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                  <div class="portfolio-content h-100">
                    <img src="{{ asset('storage/uploads/' . basename($image->image)) }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <a href="{{ asset('storage/uploads/' . basename($image->image)) }}" title="Remodeling 1"
                        data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i
                          class="bi bi-zoom-in"></i></a>

                    </div>
                  </div>
                </div><!-- End Projects Item -->

              @endforeach


            </div><!-- End Projects Container -->

          </div>

        </div>
      </section><!-- End Our Projects Section -->

       <!-- ======= Alt Services Section 2 ======= -->
    <section id="alt-services-2" class="alt-services section-bg" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
        <div class="container" data-aos="fade-up">

          <div class="row justify-content-around gy-4">
            <div class="col-lg-5 d-flex flex-column justify-content-center">
              <h3>{{ __('volunteer.title') }}</h3>
              <p>{{ __('volunteer.description') }}</p>
              <li><a href="https://forms.gle/hAKDgbLd6WbVMGyE6" class="btn">{{ __('volunteer.button') }}</a></li>

            </div>

            <div class="col-lg-6 img-bg" style="background-image: url({{('../assets/img/community.jpg')}});" data-aos="zoom-in"
              data-aos-delay="100"></div>
          </div>

        </div>
      </section><!-- End Alt Services Section 2 -->




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
  <script src="{{('../assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{('../assets/vendor/aos/aos.js')}}"></script>
  <script src="{{('../assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{('../assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{('../assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{('../assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{('../assets/vendor/php-email-form/validate.js')}}"></script>


  <!-- Template Main JS File -->
  <script src="{{('../assets/js/main.js')}}"></script>

</body>

</html>
