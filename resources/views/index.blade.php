@extends('layouts.app')
@section('content')
<title>{{ $title . ' | ' . $home->site_title . ' | '. $home->site_description }}</title>
<!--====== Start Hero Section ======-->
        <section class="hero-section">
            <!--=== Hero Wrapper ===-->
            <div class="hero-wrapper black-bg">
                <!--=== Hero Slider ===-->
                <div class="hero-slider-one">
                <!--=== Single Slider ===-->
                    <div class="single-slider">
                        <div class="container-fluid">
                            <div class="row align-items-center">
                                <div class="col-xl-6">
                                    <!--=== Hero Content ===-->
                                    <div class="hero-content text-white">
                                        <h1 data-animation="fadeInDown" data-delay=".4s"> Work & Stay <br> in Europe</h1>
                                        <div class="text-button d-flex align-items-center">
                                            <p data-animation="fadeInLeft" data-delay=".5s">Apply for work permit in Luxembourg and Austria</p>
                                            <div class="hero-button" data-animation="fadeInRight" data-delay=".6s">
                                             <a href="{{Route('application.index')}}" class="main-btn primary-btn">Apply Now<i class="fas fa-paper-plane"></i></a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <!--=== Hero Image ===-->
                                    <div class="hero-image" data-animation="fadeInRight">
                                        <img  src="https://ik.imagekit.io/uniquedigitals/Dave%20Yemite%20Travels%20Limited/ads.jpg?updatedAt=1709712861924" alt="Hero Image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--=== Single Slider ===-->
                    <div class="single-slider">
                        <div class="container-fluid">
                            <div class="row align-items-center">
                                <div class="col-xl-6">
                                    <!--=== Hero Content ===-->
                                    <div class="hero-content text-white">
                                        <h1 data-animation="fadeInDown" data-delay=".4s">Secured Student Visas</h1>
                                        <div class="text-button d-flex align-items-center">
                                            <p data-animation="fadeInLeft" data-delay=".5s">Seamless student visa solutions for your academic journey</p>
                                            <div class="hero-button" data-animation="fadeInRight" data-delay=".6s">
                                             <a href="{{Route('application.index')}}" class="main-btn primary-btn">Apply Now<i class="fas fa-paper-plane"></i></a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <!--=== Hero Image ===-->
                                    <div class="hero-image" data-animation="fadeInRight">
                                        <img src="https://ik.imagekit.io/uniquedigitals/Dave%20Yemite%20Travels%20Limited/student6.jpg?updatedAt=1705237900670" alt="Hero Image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--=== Single Slider ===-->
                    <div class="single-slider">
                        <div class="container-fluid">
                            <div class="row align-items-center">
                                <div class="col-xl-6">
                                    <!--=== Hero Content ===-->
                                    <div class="hero-content text-white">
                                        <h1 data-animation="fadeInDown" data-delay=".4s">Effortless Visiting Visas</h1>
                                        <div class="text-button d-flex align-items-center">
                                            <p data-animation="fadeInLeft" data-delay=".5s">Unlock the world with hassle-free visiting visa services.</p>
                                            <div class="hero-button" data-animation="fadeInRight" data-delay=".6s">
                                             <a href="{{Route('application.index')}}" class="main-btn primary-btn">Apply Now<i class="fas fa-paper-plane"></i></a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <!--=== Hero Image ===-->
                                    <div class="hero-image" data-animation="fadeInRight">
                                        <img src="https://images.pexels.com/photos/6000182/pexels-photo-6000182.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Hero Image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--=== Single Slider ===-->
                    <div class="single-slider">
                        <div class="container-fluid">
                            <div class="row align-items-center">
                                <div class="col-xl-6">
                                    <!--=== Hero Content ===-->
                                    <div class="hero-content text-white">
                                        <h1 data-animation="fadeInDown" data-delay=".4s">Expert EDU Consultancy</h1>
                                        <div class="text-button d-flex align-items-center">
                                            <p data-animation="fadeInLeft" data-delay=".5s">Expert educational consultation for a brighter academic future.</p>
                                            <div class="hero-button" data-animation="fadeInRight" data-delay=".6s">
                                             <a href="{{Route('application.index')}}" class="main-btn primary-btn">Apply Now<i class="fas fa-paper-plane"></i></a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <!--=== Hero Image ===-->
                                    <div class="hero-image" data-animation="fadeInRight">
                                        <img src="https://ik.imagekit.io/uniquedigitals/Dave%20Yemite%20Travels%20Limited/office/10.jpg?updatedAt=1705672100134" alt="Hero Image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--=== Single Slider ===-->
                    <div class="single-slider">
                        <div class="container-fluid">
                            <div class="row align-items-center">
                                <div class="col-xl-6">
                                    <!--=== Hero Content ===-->
                                    <div class="hero-content text-white">
                                        <h1 data-animation="fadeInDown" data-delay=".4s">Affordable Flight Tickets</h1>
                                        <div class="text-button d-flex align-items-center">
                                            <p data-animation="fadeInLeft" data-delay=".5s">Fly stress-free with our affordable and reliable flight ticket services.</p>
                                            <div class="hero-button" data-animation="fadeInRight" data-delay=".6s">
                                                 <a href="{{Route('application.index')}}" class="main-btn primary-btn">Apply Now<i class="fas fa-paper-plane"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <!--=== Hero Image ===-->
                                    <div class="hero-image" data-animation="fadeInRight">
                                   <img src="https://ik.imagekit.io/uniquedigitals/Dave%20Yemite%20Travels%20Limited/8?updatedAt=1705103986319" alt="Hero Image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Hero Section ======-->
        <!--====== Start Features Section ======-->
        <section class="features-section pt-100 pb-50">
            <div class="container">
                <div class="row align-items-xl-center">
                    <div class="col-xl-5">
                        <!--=== Features Content Box ===-->
                        <div class="features-content-box pr-lg-70 mb-50">
                            <!--=== Section Title ===-->
                            <div class="section-title mb-30">
                                <span class="sub-title">Crafting Journeys, Creating Legends</span>
                                <h2>Welcome to Daveyemite Travels Limited</h2>
                            </div>
                            <p class="mb-30">We specialize in creating personalized and unique travel experiences for our clients. Whether you are looking for a relaxing beach vacation, an adventurous trekking trip, or a cultural exploration, we have the expertise to curate the perfect itinerary for you. </p>
                             <a href="{{Route('home.about')}}" class="main-btn primary-btn">Read More<i class="fas fa-paper-plane"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="features-item-area mb-20">
                            <div class="row pl-lg-70">
                                <div class="col-md-6">
                                    <!--=== Fancy Icon Box ===-->
                                    <div class="fancy-icon-box-two mb-30">
                                        <div class="icon">
                                            <i class="flaticon-camping"></i>
                                        </div>
                                        <div class="text">
                                            <h3 class="title">Integrity</h3>
                                            <p>Transparent, ethical, excellence in visas, education, flights</p>
                                        </div>

                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <!--=== Fancy Icon Box ===-->
                                    <div class="fancy-icon-box-two mb-30">
                                        <div class="icon">
                                            <i class="flaticon-biking-mountain"></i>
                                        </div>
                                        <div class="text">
                                            <h3 class="title">Customer-Centric</h3>
                                            <p>Personalized travel service, education solutions you can trust.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!--=== Fancy Icon Box ===-->
                                    <div class="fancy-icon-box-two mb-30">
                                        <div class="icon">
                                            <i class="flaticon-fishing-2"></i>
                                        </div>
                                        <div class="text">
                                            <h3 class="title">Excellence </h3>
                                            <p>Top-notch service in visas, education, and flight arrangements.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!--=== Fancy Icon Box ===-->
                                    <div class="fancy-icon-box-two mb-30">
                                        <div class="icon">
                                            <i class="flaticon-caravan"></i>
                                        </div>
                                        <div class="text">
                                            <h3 class="title">Reliability</h3>
                                            <p>Dependable partner for visas, education guidance, and flight services.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Features Section ======-->
        <!--====== Start About Section ======-->
        <section class="about-section bg_cover pt-165 pb-210" style="background-image: url({{asset('images/bg/about-bg-1.jpg')}});">
            <div class="container">
                <div class="row align-items-xl-center">
                    <div class="col-lg-6">
                        <!--=== About Image Box ===-->
                        <div class="about-image-box mb-50">
                        <video id="video" autoplay loop poster="https://ik.imagekit.io/uniquedigitals/Dave%20Yemite%20Travels%20Limited/videos/poster.JPG?updatedAt=1706798610722" controls>
                            <source src="https://ik.imagekit.io/uniquedigitals/Dave%20Yemite%20Travels%20Limited/videos/Luxembourg%20Video.mp4?updatedAt=1713006808762" type="video/mp4">
                                Your browser does not support this video
                        </video>

                                <!-- <img src="https://ik.imagekit.io/uniquedigitals/Dave%20Yemite%20Travels%20Limited/office/2.jpg?updatedAt=1705672100433" class="rounded-2" alt="About Image"> -->
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!--=== About Content Box ===-->
                        <div class="about-content-box text-white pl-lg-40 mb-50">
                            <!--=== Section Title ===-->
                            <div class="section-title mb-30">
                                <span class="sub-title">About Our Company</span>
                                <h2>We’re Your Trusted Partner in Travelling and Visa Needs</h2>

                            </div>
                            <p class="mb-30">Our primary goal is to deliver outstanding services to our clients. We are dedicated to crafting unforgettable travel experiences by offering meticulously planned and carefully curated trips. Our focus is on exceeding expectations and ensuring customer satisfaction through meticulous attention to detail, a knowledgeable team, and seamless operations. </p>
                            <img src="{{ asset('images/logo/logo-white-2.png')}}" height="50" alt="Avater">
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End About Section ======-->
        <!--====== Start Fun Section ======-->
        <section class="fun-section">
            <div class="container">
                <!--=== Fun Wrapper ===-->
                <div class="fun-wrapper pt-60 pb-20 bg_cover" style="background-image: url({{asset('images/bg/map.png')}});">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <!--=== Counter Item ===-->
                            <div class="single-counter-item-two mb-30">
                                <div class="inner-counter text-center">
                                    <div class="icon">
                                        <i class="flaticon-journey"></i>
                                    </div>
                                    <div class="content text-white">
                                        <h2 class="number"><span class="count">180</span>+</h2>
                                        <p>Happy Travelers</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <!--=== Counter Item ===-->
                            <div class="single-counter-item-two mb-30">
                                <div class="inner-counter text-center">
                                    <div class="icon">
                                        <i class="flaticon-tent-1"></i>
                                    </div>
                                    <div class="content text-white">
                                        <h2 class="number"><span class="count">200</span>+</h2>
                                        <p>Approved Visas</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <!--=== Counter Item ===-->
                            <div class="single-counter-item-two mb-30">
                                <div class="inner-counter text-center">
                                    <div class="icon">
                                        <i class="flaticon-reviews"></i>
                                    </div>
                                    <div class="content text-white">
                                        <h2 class="number"><span class="count">100</span>+</h2>
                                        <p>Positive Reviews</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <!--=== Counter Item ===-->
                            <div class="single-counter-item-two mb-30">
                                <div class="inner-counter text-center">
                                    <div class="icon">
                                        <i class="flaticon-award"></i>
                                    </div>
                                    <div class="content text-white">
                                        <h2 class="number"><span class="count">5</span>+</h2>
                                        <p>Years in Businness</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Fun Section ======-->
        <!--====== Start About Section ======-->
        <section class="about-section pt-100">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-9">
                        <!--=== About Content Box ===-->
                        <div class="about-content-box text-center mb-55 wow fadeInDown">
                            <div class="section-title mb-30">
                                <span class="sub-title">Services we offer</span>
                                <h2>Our Visa & Travel Solutions</h2>
                            </div>
                            <p>Your one-stop destination for seamless visa processing, expert consultancy, and affordable travel services—making your journeys stress-free, efficient, and memorable.</p>
                        </div>
                    </div>
                </div>
                <div class="slider-active-4-item wow fadeInUp">
                    <!--=== Features Image Item ===-->
                   @foreach($services as $i)
                    <div class="single-features-item mb-40">
                        <div class="img-holder">
                        <h6 class="services-id">0{{ $i->id }}</h6>
                            <img src="{{ Storage::url($i->image) }}" alt="Features Image" class="services-slide-image">
                            <div class="content" style="opacity: 0.9">
                                <div class="text">
                                    <h4 class="title">{{ $i->name }}</h4>
                                    <a href="{{ Route('service.show', $i->id) }}" class="icon-btn"><i class="far fa-arrow-right"></i></a>
                                </div>
                                <p>{{ $i->excerpt }}</p>
                            </div>
                        </div>
                    </div>
                     @endforeach
                </div>
            </div>
        </section><!--====== End Hero Section ======-->
        <!--====== Start CTA Section ======-->
        <section class="cta-bg overlay bg_cover pt-150 pb-150" style="background-image: url(https://ik.imagekit.io/uniquedigitals/Dave%20Yemite%20Travels%20Limited/videos/poster.JPG?updatedAt=1706798610722);" style="background-attachment: fixed;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-8">
                        <!--=== CTA Content Box ===-->
                        <div class="cta-content-box text-white">
                            <h2 class="mb-35" >Unlock Your Journey With Daveyemite Travels Limited!</h2>
                            <a href="{{Route('application.index')}}" class="main-btn secondary-btn">Begin Your Application<i class="far fa-paper-plane"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-4">
                        <!--=== Play Box ===-->
                        <div class="play-box text-center">
                            <a href="https://ik.imagekit.io/uniquedigitals/Dave%20Yemite%20Travels%20Limited/videos/adsvideo.mp4?updatedAt=1706796481144" class="video-popup"><i class="fas fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End CTA Section ======-->
        <!--====== Start What We Section ======-->
        <section class="we-section pt-100 pb-50">
            <div class="container">
                <div class="row align-items-xl-center">
                    <div class="col-xl-6 order-2 order-xl-1">
                        <!--=== We Image Box ===-->
                        <div class="we-two_image-box mb-20">
                            <div class="row align-items-end">
                                <div class="col-md-6">
                                    <!--=== We Image ===-->
                                    <div class="we-image mb-30">
                                        <img src="https://ik.imagekit.io/uniquedigitals/Dave%20Yemite%20Travels%20Limited/office/9.jpg?updatedAt=1705672105387" alt="we Image">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!--=== We Image ===-->
                                    <div class="we-image mb-30">
                                        <img src="https://ik.imagekit.io/uniquedigitals/Dave%20Yemite%20Travels%20Limited/office/7.jpg?updatedAt=1705672105400" alt="we Image">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <!--=== We Image ===-->
                                    <div class="we-image mb-30 pr-lg-30 text-md-end">
                                        <img src="https://ik.imagekit.io/uniquedigitals/Dave%20Yemite%20Travels%20Limited/office/15.jpg?updatedAt=1705672100343" alt="we Image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 order-1 order-xl-2">
                        <!--=== We Content Box ===-->
                        <div class="we-content-box pl-lg-50 mb-10">
                            <!--=== Section Title ===-->
                            <div class="section-title mb-30">
                                <span class="sub-title">Our Processes</span>
                                <h2>Explore Our Visa Application Processes</h2>
                            </div>
                            <!--=== Features List ===-->
                            <div class="features-list_one">
                                <!--=== Single Features List ===-->
                                <div class="single-features-list mb-40">
                                    <div class="icon-inner d-flex align-items-center">
                                        <div class="icon-check">
                                            <i class="fas fa-badge-check"></i>
                                        </div>
                                        <div class="icon">
                                            <i class="flaticon-travel"></i>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h4>Complete Pre-application Form</h4>
                                        <p>Provide essential details to kickstart your visa journey.  <a href="{{Route('application.index')}}" target="_blank"><strong style="color: #007DE6;">Click Here</strong></a> to Get Started</p>
                                    </div>
                                </div>
                                     <!--=== Single Features List ===-->

                                <div class="single-features-list mb-40">
                                    <div class="icon-inner d-flex align-items-center">
                                        <div class="icon-check">
                                            <i class="fas fa-badge-check"></i>
                                        </div>
                                        <div class="icon">
                                            <i class="flaticon-travel"></i>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h4>Instant Form Download</h4>
                                        <p>Access your personalized form instantly for your convenience.</p>
                                    </div>
                                </div>
                                <!--=== Single Features List ===-->
                                <div class="single-features-list mb-40">
                                    <div class="icon-inner d-flex align-items-center">
                                        <div class="icon-check">
                                            <i class="fas fa-badge-check"></i>
                                        </div>
                                        <div class="icon">
                                            <i class="flaticon-travel"></i>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h4>Submit Completed Form</h4>
                                        <p>Complete the final step with ease, ensuring a smooth application submission.</p>
                                    </div>

                                </div>
                                <a href="{{Route('application.index')}}" class="main-btn secondary-btn">Get Started!<i class="fas fa-paper-plane"></i></a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End What We Section ======-->
        <!--====== Start Gallery Section ======-->
        <section class="gallery-section-two pb-100">
            <div class="container-fluid">
             <!--=== About Content Box ===-->
                        <div class="about-content-box text-center mb-55 wow fadeInDown">
                            <div class="section-title mb-30">
                                <span class="sub-title">Services we offer</span>
                                <h2>Our Cities & Places</h2>
                            </div>
                            <p>Your one-stop destination for seamless visa processing, expert consultancy, and affordable travel services—making your journeys stress-free, efficient, and memorable.</p>
                        </div>
                <!--=== Gallery Slider ===-->
                <div class="slider-active-3-item-dot">
                    <!--=== Gallery Item ===-->
                    <div class="single-gallery-item-two">
                        <div class="img-holder">
                            <img src="https://ik.imagekit.io/uniquedigitals/Dave%20Yemite%20Travels%20Limited/US.jpg?updatedAt=1705240289413" alt="Gallery Image">
                        </div>
                        <div class="content">
                            <h3 class="title">United States</h3>
                            <a href="#">Adventure & Travel</a>
                        </div>
                    </div>
                    <!--=== Gallery Item ===-->
                    <div class="single-gallery-item-two">
                        <div class="img-holder">
                            <img src="https://ik.imagekit.io/uniquedigitals/Dave%20Yemite%20Travels%20Limited/canada.jpg?updatedAt=1705240289477" alt="Gallery Image">
                        </div>
                        <div class="content">
                            <h3 class="title">Canada</h3>
                            <a href="#">Adventure & Travel</a>
                        </div>
                    </div>
                    <!--=== Gallery Item ===-->
                    <div class="single-gallery-item-two">
                        <div class="img-holder">
                            <img src="https://ik.imagekit.io/uniquedigitals/Dave%20Yemite%20Travels%20Limited/UK.jpg?updatedAt=1705240289826" alt="Gallery Image">
                        </div>
                        <div class="content">
                            <h3 class="title">United Kingdom</h3>
                            <a href="#">Adventure & Travel</a>
                        </div>
                    </div>
                     <!--=== Gallery Item ===-->
                    <div class="single-gallery-item-two">
                        <div class="img-holder">
                            <img src="https://ik.imagekit.io/uniquedigitals/Dave%20Yemite%20Travels%20Limited/cyprus.jpeg?updatedAt=1705240289861" alt="Gallery Image">
                        </div>
                        <div class="content">
                            <h3 class="title">North Cyprus</h3>
                            <a href="#">Adventure & Travel</a>
                        </div>
                    </div>
                    <!--=== Gallery Item ===-->
                    <div class="single-gallery-item-two">
                        <div class="img-holder">
                            <img src="https://ik.imagekit.io/uniquedigitals/Dave%20Yemite%20Travels%20Limited/EUROPE.jpg?updatedAt=1705240289740" alt="Gallery Image">
                        </div>
                        <div class="content">
                            <h3 class="title">Europe</h3>
                            <a href="#">Adventure & Travel</a>
                        </div>
                    </div>
                    <!--=== Gallery Item ===-->
                    <div class="single-gallery-item-two">
                        <div class="img-holder">
                            <img src="https://ik.imagekit.io/uniquedigitals/Dave%20Yemite%20Travels%20Limited/turkey.jpg?updatedAt=1705240289041" alt="Gallery Image">
                        </div>
                        <div class="content">
                            <h3 class="title">Turkey</h3>
                            <a href="#">Adventure & Travel</a>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Gallery Section ======-->
        <!--====== Start Testimonial Section ======-->
        <section class="testimonial-section bg_cover pt-100 pb-100" style="background-image: url({{ asset('images/bg/map-bg.jpg')}});">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7">
                        <div class="section-title text-center text-white mb-60">
                            <span class="sub-title">Testimonials</span>
                            <h2>Words from Our Happy Travelers</h2>
                        </div>
                    </div>
                </div>
                <div class="slider-active-3-item-dot">
                    <div class="gw-testimonial-item-two">
                        <div class="testimonial-inner-content">
                            <div class="quote-rating-box">
                                <div class="icon">
                                    <img src="{{ asset('images/testimonial/quote.png')}}" alt="quote icon">
                                </div>
                                <div class="ratings-box">
                                    <h4>Quality Services</h4>
                                    <ul class="ratings">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <p>Outstanding service! The visa application process was smooth, and the travel arrangements exceeded my expectations.</p>
                            <div class="author-thumb-title">
                                <div class="author-thumb">
                                    <img src="{{ asset('images/resource/profile.png')}}" alt="Author Image">
                                </div>
                                <div class="author-title">
                                    <h3 class="title">Adekunle Francis</h3>
                                    <p class="position">Happy Client </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gw-testimonial-item-two">
                        <div class="testimonial-inner-content">
                            <div class="quote-rating-box">
                                <div class="icon">
                                    <img src="{{ asset('images/testimonial/quote.png')}}" alt="quote icon">
                                </div>
                                <div class="ratings-box">
                                    <h4>Quality Services</h4>
                                    <ul class="ratings">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <p>Excellent services! The visa process was efficient, and the travel arrangements were superbly managed.</p>
                            <div class="author-thumb-title">
                                <div class="author-thumb">
                                    <img src="{{ asset('images/resource/profile.png')}}" alt="Author Image">
                                </div>
                                <div class="author-title">
                                    <h3 class="title">Ebuka Emmanuel</h3>
                                      <p class="position">Happy Client </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gw-testimonial-item-two">
                        <div class="testimonial-inner-content">
                            <div class="quote-rating-box">
                                <div class="icon">
                                    <img src="{{ asset('images/testimonial/quote.png')}}" alt="quote icon">
                                </div>
                                <div class="ratings-box">
                                    <h4>Quality Services</h4>
                                    <ul class="ratings">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <p>Had an amazing experience! Visa application was stress-free, and the travel arrangements were perfect.</p>
                            <div class="author-thumb-title">
                                <div class="author-thumb">
                                    <img src="{{ asset('images/resource/profile.png')}}" alt="Author Image">
                                </div>
                                <div class="author-title">
                                    <h3 class="title">Adekoya Rasheed</h3>
                                      <p class="position">Happy Client </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gw-testimonial-item-two">
                        <div class="testimonial-inner-content">
                            <div class="quote-rating-box">
                                <div class="icon">
                                    <img src="{{ asset('images/testimonial/quote.png')}}" alt="quote icon">
                                </div>
                                <div class="ratings-box">
                                    <h4>Quality Services</h4>
                                    <ul class="ratings">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <p>Highly professional! The visa process was handled with expertise, and the travel arrangements were excellent.</p>
                            <div class="author-thumb-title">
                                <div class="author-thumb">
                                    <img src="{{ asset('images/resource/profile.png')}}" alt="Author Image">
                                </div>
                                <div class="author-title">
                                    <h3 class="title">Opeyemi Aanu</h3>
                                      <p class="position">Happy Client </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Testimonial Section ======-->



         <!--====== Start Blog Section ======-->
        <section class="blog-section pt-60 pb-60">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <!--=== Section Title ===-->
                        <div class="section-title text-center mb-45 wow fadeInDown">
                            <span class="sub-title">News & Blog</span>
                            <h2>Amazing News & Blog For
                                Every Single Update</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">


                 @foreach($recent_posts as $post)
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <!--=== Single post Post ===-->
                                    <a href="{{ Storage::url($post->image) }}" class="icon-btn img-popup"><i class="far fa-plus"></i></a>
                        <div class="single-blog-post mb-40 wow fadeInUp">
                            <div class="post-thumbnail">
                                <img src="{{ Storage::url($post->image) }}" alt="Post Image">
                            </div>
                            <div class="entry-content">
                                <a href="" class="cat-btn">{{ $post->categories }}</a>
                                <div class="post-meta">
                                    <span><i class="far fa-calendar-alt"></i><a href="">{{ $post->created_at->diffForHumans() }}</a></span>
                                </div>
                                <h3 class="title"><a href="">{{ $post->name }}</a></h3>
                                <p> {{ $post->excerpt }}</p>
                                        </p>
                                <a href="{{ Route('post.show', $post->id) }}" class="main-btn filled-btn">Read More<i class="far fa-paper-plane"></i></a>
                            </div>
                        </div>
                    </div>


        @endforeach
                </div>
            </div>
        </section><!--====== End Blog Section ======-->

         <!--====== Start Booking Section ======-->
        <section class="booking-section pt-60 pb-50">
            <div class="container">
                <div class="row align-items-xl-center">
                 <div class="col-lg-6">
                        <!--=== Booking Image Box ===-->
                        <div class="booking-image-box mb-50 ml-lg-45 wow fadeInRight">
                            <img src="https://ik.imagekit.io/uniquedigitals/Dave%20Yemite%20Travels%20Limited/ads.jpg?updatedAt=1709712861924>" class="radius-60" alt="Contact Image">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!--=== Booking Content Box ===-->
                        <div class="booking-content-box mb-50 wow fadeInLeft">
                            <div class="section-title mb-50">
                                <span class="sub-title">Work in Europe</span>
                                <h2>Apply for work permit in Luxembourg and Austria</h2>
                            </div>

                            <p>At Daveyemite Travels Limited, we have simplified the process of obtaining your working permits for both Luxembourg and Austria. Please don't hesitate to reach out to us today initiation of your visa application is just a message away.</p>
                            <a href="{{Route('application.index')}}" style="margin-top: 3vw"> <button class="main-btn primary-btn">Book Now<i class="fas fa-paper-plane"></i></button></a>
                        </div>
                    </div>

                </div>
            </div>
        </section><!--====== End Hero Section ======-->

@endsection


