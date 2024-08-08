<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!--====== Required meta tags ======-->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="Adventure, Tours, Travel">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--====== Title ======-->

       <meta name="csrf-token" content="{{ csrf_token() }}">

        <!--====== Favicon Icon ======-->
        <link rel="shortcut icon" href="{{ asset('images/logo/favicon.png')}}" type="image/png">
        <!--====== Google Fonts ======-->
        <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
        <!--====== Flaticon css ======-->
        <link rel="stylesheet" href="{{ asset('fonts/flaticon/flaticon_gowilds.css')}}">
        <!--====== FontAwesome css ======-->
        <link rel="stylesheet" href="{{asset('fonts/fontawesome/css/all.min.css')}}">
        <!--====== Bootstrap css ======-->
        <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}">
        <!--====== magnific-popup css ======-->
        <link rel="stylesheet" href="{{ asset('vendor/magnific-popup/dist/magnific-popup.css')}}">
        <!--====== Slick-popup css ======-->
        <link rel="stylesheet" href="{{ asset('vendor/slick/slick.css')}}">
        <!--====== Jquery UI css ======-->
        <link rel="stylesheet" href="{{ asset('vendor/jquery-ui/jquery-ui.min.css')}}">
        <!--====== Nice Select css ======-->
        <link rel="stylesheet" href="{{ asset('vendor/nice-select/css/nice-select.css')}}">
        <!--====== Animate css ======-->
        <link rel="stylesheet" href="{{ asset('vendor/animate.css')}}">
        <!--====== Default css ======-->
        <link rel="stylesheet" href="{{ asset('css/default.css')}}">
        <!--====== Style css ======-->
        <link rel="stylesheet" href="{{ asset('css/style.css')}}">

          <!-- Fonts -->
          <link rel="preconnect" href="https://fonts.bunny.net">
          <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

          <!-- Scripts -->
          @livewireStyles
    </head>
    <body>
        <!--====== Start Preloader ======-->
        <div class="preloader">
            <div class="loader">
                <div class="pre-shadow"></div>
                <div class="pre-box"></div>
            </div>
        </div><!--====== End Preloader ======-->
        <!--====== Search From ======-->
		<div class="modal fade search-modal" id="search-modal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <form method="POST" action="{{ Route('search.index') }}">
                        @csrf
                        <div class="form_group">
                        	<input type="search" class="form_control" placeholder="Search our website" name="search">
                        	<label><i class="fa fa-search"></i></label>
                        </div>
                    </form>
                </div>
            </div>
        </div><!--====== Search From ======-->
        <!--====== Start Hero Section ======-->
        <header class="header-area header-three">
            <!--====== Header Top Bar ======-->
            <div class="header-top-bar pt-30 pb-30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-3 d-none d-xl-block">
                            <!--====== Site Branding ======-->
                            <div class="site-brading">
                                <a href="{{Route('home.index')}}" class="brand-logo"><img src="{{ asset('images/logo/logo-black.png')}}" height="70px" alt="Logo"></a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-12">
                            <!--====== Information Wrapper ======-->
                            <div class="information-wrapper">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="single-info-item-two">
                                            <div class="inner-info">
                                                <div class="icon">
                                                    <i class="far fa-map-marker-alt"></i>
                                                </div>
                                                <div class="info">
                                                    <span class="title">Office Address</span>
                                                    <h6> <a href="https://maps.app.goo.gl/6QdLDJ69ZyPBnrzo8" target="_blank" ><small>Gbaagi Junction, Ilupeju Estate off Olorunda - Abaa Road Akobo Ojurin Ibadan Oyo State Nigeria.</small> </a>  </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="single-info-item-two">
                                            <div class="inner-info">
                                                <div class="icon">
                                                    <i class="far fa-envelope"></i>
                                                </div>
                                                <div class="info">
                                                    <span class="title">Email Address</span>
                                                    <h6><a href="mailto:info@daveyemitetravelslimited.org"><small>info@daveyemite <br> travelslimited.org</small></a></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="single-info-item-two">
                                            <div class="inner-info">
                                                <div class="icon">
                                                    <i class="far fa-phone-plus"></i>
                                                </div>
                                                <div class="info">
                                                    <span class="title">Our Hotlines</span>
                                                    <h6><a href="tel:+447415463075"><small>+44 (741) 546 3075</small></a></h6>
                                                    <h6><a href="tel:+2349035173282"><small>+234 (903) 517 3282</small></a></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== Header Navigation ======-->
            <div class="header-navigation navigation-white">
                <div class="nav-overlay"></div>
                <div class="container-fluid">
                    <div class="primary-menu black-bg">
                        <!--====== Site Branding ======-->
                        <div class="site-brading d-block d-xl-none">
                            <a href="{{Route('home.index')}}" class="brand-logo"><img src="{{ asset('images/logo/logo-white.png')}}" alt="Logo" height="60px"></a>
                        </div>
                        <!--====== Nav Menu ======-->
                        <div class="nav-menu">
                            <!--====== Site Branding ======-->
                            <div class="mobile-logo mb-30 d-block d-xl-none">
                                <a href="{{Route('home.index')}}" class="brand-logo"><img src="{{ asset('images/logo/logo-black.png')}}" alt="Site Logo"></a>
                            </div>
                            <!--=== Nav Search ===-->
                            <div class="nav-search mb-30 d-block d-xl-none ">
                                <form method="POST" action="{{ Route('search.index') }}">
                                    @csrf
                                    <div class="form_group">
                                        <input type="search" class="form_control" placeholder="Search our website" name="search" required>
                                        <button class="search-btn"><i class="fas fa-search"></i></button>
                                    </div>
                                </form>
                            </div>
                            <!--====== Main Menu ======-->
                            <nav class="main-menu">
                                <ul>
                                    <li class="menu-item has-children"><a href="{{Route('home.index')}}">Home</a>

                                    </li>
                                    <li class="menu-item has-children"><a href="#">About Us</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ Route('home.about')}}">About Our Company</a></li>
                                            <li><a href="{{ Route('home.teams')}}">Management Team</a></li>
                                            <li><a href="{{ Route('home.reviews')}}">Reviews</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item has-children"><a href="{{Route('offer.index')}}">Our Offers</a>
                                        <ul class="sub-menu">
                                        @foreach($offers as $i)
                                             <li><a href="{{Route('offer.show', $i->id)}}">{{ $i->name }}</a></li>
                                        @endforeach
                                        </ul>
                                    </li>

                                    </li>
                                    <li class="menu-item has-children"><a href="{{Route('service.index')}}">Our Services</a>
                                        <ul class="sub-menu">
                                        <li class="menu-item "><a href="{{Route('service.index')}}">All Services</a>
                                      @foreach($services as $service)
                                        <li><a href="{{Route('service.show', $service->id)}}">{{ $service->name }}</a></li>

                                        @endforeach
                                        </ul>
                                    </li>
                                    <li class="menu-item"><a href="{{Route('application.index')}}">Bookings</a>

                                    </li>
                                    <li class="menu-item has-children"><a href="#">More</a>
                                        <ul class="sub-menu">
                                        <li class="menu-item"><a href="{{Route('post.index')}}">Our Blog</a>

                                    </li>
                                    <li class="menu-item"><a href="{{Route('home.gallery')}}">Our Gallery</a>

                                    </li>
                                        </ul>
                                    </li>

                                    <li class="menu-item has-children"><a>Contact</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{Route('home.contact')}}">Contact Us</a></li>
                                            <li><a href="{{Route('home.faqs')}}">FAQs</a></li>

                                        </ul>
                                    </li>
                                    <li class="menu-item search-item">
                                        <div class="search-btn" data-bs-toggle="modal" data-bs-target="#search-modal"><i class="far fa-search"></i></div>
                                    </li>
                                </ul>
                            </nav>
                            <!--====== Menu Button ======-->
                            <div class="menu-button mt-40 d-xl-none">
                                <a href="{{Route('application.index')}}" class="main-btn secondary-btn">Apply Now<i class="fas fa-paper-plane"></i></a>
                            </div>
                        </div>
                        <!--====== Nav Right Item ======-->
                        <div class="nav-right-item">
                            <div class="lang-dropdown">
                                <select class="wide">
                                    <option value="English">English</option>
                                    <option value="French">French</option>
                                </select>
                            </div>
                            <div class="menu-button d-xl-block d-none">
                                <a href="{{Route('application.index')}}" class="main-btn primary-btn">Apply Now<i class="fas fa-paper-plane"></i></a>
                            </div>
                            <div class="navbar-toggler">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header><!--====== End Header ======-->
        <!--====== Start Hero Section ======-->

        @yield('content')
            <!--====== Start Partners Section ======-->
        <section class="partners-section">
            <div class="container">
                <!--=== Partners Slider ===-->
                <div class="partner-slider-one pt-80 pb-70 wow fadeInUp">
                    <!--=== Partner Item ===-->
                    <div class="single-partner-item">
                        <div class="partner-img">
                            <a href="#"><img src="{{ asset('images/flags/canada.svg')}}" alt="Partner Image"></a>
                        </div>
                    </div>
                    <!--=== Partner Item ===-->
                    <div class="single-partner-item">
                        <div class="partner-img">
                            <a href="#"><img src="{{ asset('images/flags/europe.png')}}" alt="Partner Image"></a>
                        </div>
                    </div>
                    <!--=== Partner Item ===-->
                    <div class="single-partner-item">
                        <div class="partner-img">
                            <a href="#"><img src="{{ asset('images/flags/cyprus.svg')}}" alt="Partner Image"></a>
                        </div>
                    </div>
                    <!--=== Partner Item ===-->
                    <div class="single-partner-item">
                        <div class="partner-img">
                            <a href="#"><img src="{{ asset('images/flags/usa.png')}}" alt="Partner Image"></a>
                        </div>
                    </div>
                    <!--=== Partner Item ===-->
                    <div class="single-partner-item">
                        <div class="partner-img">
                            <a href="#"><img src="{{ asset('images/flags/turkey.png')}}" alt="Partner Image"></a>
                        </div>
                    </div>
                    <!--=== Partner Item ===-->
                    <div class="single-partner-item">
                        <div class="partner-img">
                            <a href="#"><img src="{{ asset('images/flags/uae.webp')}}" alt="Partner Image"></a>
                        </div>
                    </div>
                    <!--=== Partner Item ===-->
                    <div class="single-partner-item">
                        <div class="partner-img">
                            <a href="#"><img src="{{ asset('images/flags/uk.webp')}}" alt="Partner Image"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Partners Section ======-->
        <!--====== Start Gallery Section ======-->
        <section class="gallery-section mbm-150">
            <div class="container-fluid">
                <div class="slider-active-5-item wow fadeInUp">
                @foreach($galleries as $i)
                    <!--=== Single Gallery Item ===-->
                    <div class="single-gallery-item">
                        <div class="gallery-img">
                            <img src="{{ Storage::url($i->image) }}" alt="Gallery Image">
                            <div class="hover-overlay">
                                <a href="{{ Storage::url($i->image) }}" class="icon-btn img-popup"><i class="far fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </section><!--====== End Gallery Section ======-->
           <!--====== Start Footer ======-->
        <footer class="main-footer black-bg pt-230">

            <div class="container">
                <!--=== Footer CTA ===-->
                <div class="footer-cta pb-40">
                    <div class="row">
                        <div class="col-lg-6">
                            <!--=== Single CTA Item ===-->
                            <div class="single-cta-item pr-lg-60 mb-40 wow fadeInLeft">
                                <div class="icon">
                                    <img src="{{ asset('images/icon/support.png')}}" alt="Icon">
                                </div>
                                <div class="content">
                                    <h3 class="title">We are Online <br> Chat Us</h3>
                                    <a href="https://wa.me/+2347089908306" class="icon-btn"><i class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <!--=== Single CTA Item ===-->
                            <div class="single-cta-item pl-lg-60 mb-40 wow fadeInRight">
                                <div class="icon">
                                    <img src="{{ asset('images/icon/travel.png')}}" alt="Icon">
                                </div>
                                <div class="content">
                                    <h3 class="title">Begin Your <br> Application</h3>
                                    <a href="{{Route('application.index')}}"  class="icon-btn"><i class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-top pt-40 wow fadeInUp">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <!--=== Single Info Item ===-->
                            <div class="single-info-item mb-40">
                                <div class="icon">
                                    <i class="far fa-map-marker-alt"></i>
                                </div>
                                <div class="info">
                                    <span class="title">Office Address</span>
                                    <p><a href="https://maps.app.goo.gl/6QdLDJ69ZyPBnrzo8">Gbaagi Junction, Ilupeju Estate off Olorunda - Abaa Road Akobo Ojurin Ibadan Oyo State Nigeria.</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <!--=== Single Info Item ===-->
                            <div class="single-info-item mb-40">
                                <div class="icon">
                                    <i class="far fa-envelope-open"></i>
                                </div>
                                <div class="info">
                                    <span class="title">Email Address</span>
                                    <p style="margin-bottom: 1vw;"><a href="mailto:info@daveyemitetravelslimited.org">info@daveyemite <br> travelslimited.org</a></p>
                                     <p><a href="mailto:apply@daveyemitetravelslimited.org">apply@daveyemite <br> travelslimited.org</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <!--=== Single Info Item ===-->
                            <div class="single-info-item mb-40">
                                <div class="icon">
                                    <i class="far fa-map-marker-alt"></i>
                                </div>
                                <div class="info">
                                    <span class="title">Hotlines</span>
                                    <p><a href="tel:+447415463075 ">+44 (741) 546 3075 <i class="fas fa-phone-alt"></i></a></p>
                                 <p><a href="tel:+2349035173282">+234 (903) 517 3282 <i class="fas fa-phone-alt"></i></a></p>
                                <p><a href="https://wa.me/+2347089908306">+234 (708) 990 8306 <i class="fab fa-whatsapp"></i></a> </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <!--=== Social Box ===-->
                            <div class="social-box mb-40 float-lg-end">
                                <ul class="social-link">
                                    <li><a href="https://www.facebook.com/people/Dave-Yemite-Travels-Limited/100094151692181/"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://www.x.com/daveyemite2024"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="https://www.instagram.com/daveyemite_travels_limited"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="https:/wa.me/+2347089908306"><i class="fab fa-whatsapp"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--=== Footer Widget ===-->
                <div class="footer-widget-area pt-75 pb-30">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <!--=== Footer Widget ===-->
                            <div class="footer-widget about-company-widget mb-40 wow fadeInUp">
                                <h4 class="widget-title">About Us</h4>
                                <div class="footer-content">
                                    <p>We specialize in creating personalized and unique travel experiences for our clients. Whether you are looking for a relaxing beach vacation, an adventurous trekking trip, or a cultural exploration, we have the expertise to curate the perfect itinerary for you.</p>
                                    <a href="#" class="footer-logo"><img src="{{ asset('images/logo/logo-white.png') }}" alt="Site Logo"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6">
                            <!--=== Footer Widget ===-->
                            <div class="footer-widget service-nav-widget mb-40 pl-lg-70 wow fadeInDown">
                                <h4 class="widget-title">Our Services</h4>
                                <div class="footer-content">
                                    <ul class="footer-widget-nav">
                                        @foreach($services as $i)
                                        <li><a href="">{{ $i->name }}</a></li>

                                        @endforeach


                                    </ul>

                                    <ul class="footer-widget-nav">
                                    <h4 class="widget-title">Web Navigations</h4>
                                        <li><a href="{{Route('application.index')}}">Apply Now</a></li>
                                        <li><a href="{{Route('home.about')}}">About Us</a></li>

                                        <li><a href="{{Route('service.index')}}">Our Services</a></li>
                                        <li><a href="{{Route('home.gallery')}}">Our Gallery</a></li>
                                        <li><a href="#">Our Teams</a></li>
                                        <li><a href="{{Route('post.index')}}">Our Blogs</a></li>
                                        <li><a href="{{Route('home.faqs')}}">FAQs</a></li>
                                        <li><a href="{{Route('home.contact')}}">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <!--=== Footer Widget ===-->
                            <div class="footer-widget footer-newsletter-widget mb-40 pl-lg-100 wow fadeInUp">
                                <h4 class="widget-title">Subscribe to <br> Our Newsletter</h4>
                                <div class="footer-content">
                                    <p>Subscribe to get our updates and offers right in your inbox | We don't spam!</p>
                                    <form action="{{ Route('newsletter.store') }}" method="POST">
                                        @csrf
                                        @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                     @endif
                                    @if(session('success'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            {{ session('success') }}

                                        </div>
                                        @endif
                                        <div class="form_group">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <input type="email" class="form_control" placeholder="Email Address" name="email" required>

                                                </div>
                                                <div class="col-lg-4">

                                                <button class="main-btn primary-btn">Subscribe<i class="fas fa-paper-plane"></i></button>
                                                </div>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--=== Footer Copyright ===-->
                <div class="footer-copyright">
                    <div class="row">
                        <div class="col-lg-6">
                            <!--=== Footer Text ===-->
                            <div class="footer-text">
                                <p>&copy; <?= date('Y'); ?> | <span style="color: #F7921E;">Daveyemite Travels Limited</span> | Developed by <span style="color: #F7921E;"> <a href="https://uniquedigitals.com.ng" target="_blank">Unique Digitals</a></span></p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <!--=== Footer Nav ===-->
                            <div class="footer-nav float-lg-end">
                                <ul>
                                    <li><a href="#">Terms & Conditions</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Help & Support</a></li>
                                    @guest
                                        <li><a href="{{ route('login') }}">Login</a></li>
                                    @endguest

                                    @auth
                                    <p>{{ Auth::user()->name }}</p>
                                    <form action="{{ route('logout') }}" method="post">
                                        @csrf
                                            <button type="submit" class="dropdown-item text-black px-0 py-8 hover-bg-transparent hover-text-danger d-flex align-items-center gap-3"> <iconify-icon icon="lucide:power" class="icon text-xl"></iconify-icon>Log Out</button>
                                    </form>
                                    @endauth
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer><!--====== End Footer ======-->
        <!--====== Back To Top  ======-->
        <a href="#" class="back-to-top" ><i class="far fa-angle-up"></i></a>
        <!--====== Jquery js ======-->
        <script src="{{  asset('vendor/jquery-3.6.0.min.js')}}"></script>
        <!--====== Bootstrap js ======-->
        <script src="{{ asset('vendor/popper/popper.min.js')}}"></script>
        <!--====== Bootstrap js ======-->
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
        <!--====== Slick js ======-->
        <script src="{{ asset('vendor/slick/slick.min.js')}}"></script>
        <!--====== Magnific js ======-->
        <script src="{{ asset('vendor/magnific-popup/dist/jquery.magnific-popup.min.js')}}"></script>
        <!--====== Isotope js ======-->
        <script src="{{ asset('vendor/isotope.min.js')}}"></script>
        <!--====== Imagesloaded js ======-->
        <script src="{{ asset('vendor/imagesloaded.min.js')}}"></script>
        <!--====== Counterup js ======-->
        <script src="{{ asset('vendor/jquery.counterup.min.js')}}"></script>
        <!--====== Waypoints js ======-->
        <script src="{{ asset('vendor/jquery.waypoints.js')}}"></script>
        <!--====== Nice-select js ======-->
        <script src="{{ asset('vendor/nice-select/js/jquery.nice-select.min.js')}}"></script>
        <!--====== jquery UI js ======-->
        <script src="{{ asset('vendor/jquery-ui/jquery-ui.min.js')}}"></script>
        <!--====== WOW js ======-->
        <script src="{{ asset('vendor/wow.min.js')}}"></script>
        <!--====== Main js ======-->
        <script src="{{ asset('js/theme.js')}}"></script>
        <script src="{{ asset('js/script.js')}}"></script>

        <script  src="//code.tidio.co/ngkrkmbh2wocw5ji6sdpdywm7jgwinbn.js" async></script>

        @livewireScripts
    </body>
</html>

