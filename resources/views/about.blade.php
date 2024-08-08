@extends('layouts.app')
@section('content')
<title>{{ $title . ' | ' . $home->site_title . ' | '. $home->site_description }}</title>

<livewire:breadcrumb title="About Us" image="https://ik.imagekit.io/uniquedigitals/Dave%20Yemite%20Travels%20Limited/office/2.jpg?updatedAt=1705672100433" />
        <!--====== Start Contact Section ======-->

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
                            <p class="mb-30">Our team of knowledgeable travel experts will work closely with you to understand your preferences, interests, and budget, ensuring that every aspect of your trip is tailored to your needs.Contact us today to start planning your next adventure or to explore your educational opportunities abroad. We look forward to assisting you!</p>

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
        <!--====== Start We Section ======-->
        <section class="who-we-section">
            <div class="container">
                <div class="row align-items-xl-center">
                    <div class="col-lg-6 order-2 order-lg-1">
                        <!--=== We Image Box ===-->
                        <div class="we-image-box text-center text-lg-left wow fadeInDown">
                            <img src="https://ik.imagekit.io/uniquedigitals/Dave%20Yemite%20Travels%20Limited/office/2.jpg?updatedAt=1705672100433" class="radius-top-left-right-288" alt="Image">
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2">
                        <!--=== We Content Box ===-->
                        <div class="we-one_content-box">
                            <div class="section-title mb-30 wow fadeInUp">
                                <span class="sub-title">Who We Are</span>
                                <h2>We’re Your Trusted Partner in Travelling and Visa Needs</h2>
                            </div>
                            <p class="wow fadeInDown">Our primary goal is to deliver outstanding services to our clients. We are dedicated to crafting unforgettable travel experiences by offering meticulously planned and carefully curated trips. Our focus is on exceeding expectations and ensuring customer satisfaction through meticulous attention to detail, a knowledgeable team, and seamless operations. </p>
                            <div class="skill-wrapper wow fadeInUp">
                                <div class="single-skill-circle text-center">
                                    <div class="inner-circle">
                                        <div class="line"></div>
                                        <span class="number">95%</span>
                                    </div>
                                    <h5>Saticfied Clients</h5>
                                </div>
                                <div class="single-skill-circle text-center">
                                    <div class="inner-circle">
                                        <div class="line"></div>
                                        <span class="number">93%</span>
                                    </div>
                                    <h5>Success Rate</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End We Section ======-->
        <!--====== Start Team Section ======-->
        <section class="team-section pt-100 pb-70 gray-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7">
                        <!--====== Section Title ======-->
                        <div class="section-title text-center mb-50 wow fadeInDown">
                            <span class="sub-title">Team Member</span>
                            <h2>Experts Behind the sucess of Daveyemite Travels Limited</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                 @foreach($teams as $team)
                <div class="col-lg-4 col-md-6 col-sm-12">
                        <!--====== Single Team Item ======-->

                        <div class="single-team-item mb-30 wow fadeInUp">
                            <div class="member-img">
                               <img src="{{ Storage::url($team->image) }}" alt="Team Image">
                            </div>
                            <div class="member-info">
                                <h4 class="title" style="text-transform: capitalize">{{ $team->title }} {{ $team->first_name }} {{ $team->surname}}</h4>
                                <p class="position">{{ $team->job_role }}</p>
                                <ul class="social-link">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                     @endforeach



                </div>
            </div>
        </section><!--====== End Team Section ======-->
        <!--====== Start What We Section ======-->
        <section class="we-section pt-100 pb-50">
            <div class="container">
                <div class="row align-items-xl-center">
                    <div class="col-xl-6">
                        <div class="we-content-box mb-10 wow fadeInLeft">
                            <div class="section-title mb-30">
                               <span class="sub-title">Our Processes</span>
                                <h2>Explore Our Visa Application Processes</h2>
                            </div>
                            <div class="features-list_one">
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
                    <div class="col-xl-6">
                        <div class="we-two_image-box mb-20">
                            <div class="row align-items-end">
                                <div class="col-md-6">
                                    <div class="we-image mb-30 wow fadeInLeft">
                                        <img src="https://ik.imagekit.io/uniquedigitals/Dave%20Yemite%20Travels%20Limited/office/12.jpg?updatedAt=1705672100102" alt="we Image">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="we-image mb-30 wow fadeInRight">
                                        <img src="https://ik.imagekit.io/uniquedigitals/Dave%20Yemite%20Travels%20Limited/office/11.jpg?updatedAt=1705672100367" alt="we Image">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="we-image mb-30 pr-lg-30 text-md-end wow fadeInDown">
                                        <img src="https://ik.imagekit.io/uniquedigitals/Dave%20Yemite%20Travels%20Limited/office/1.jpg?updatedAt=1705672099795" alt="we Image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End What We Section ======-->
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
        <!--====== Start Testimonial Section ======-->
        <section class="testimonial-section pt-60 pb-60">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <!--=== Section Title ===-->
                        <div class="section-title text-center mb-60 wow fadeInDown">
                            <span class="sub-title">Testimonials</span>
                            <h2>Words from Our Happy Travelers</h2>
                        </div>
                    </div>
                </div>
                <div class="row align-items-xl-center">
                    <div class="col-xl-5 col-lg-12 order-2 order-xl-1">
                        <!--=== Testimonial Image ===-->
                        <div class="testimonial-one_image-box mb-40 wow fadeInLeft">
                            <img src="https://ik.imagekit.io/uniquedigitals/Dave%20Yemite%20Travels%20Limited/blogs/4.jpg?updatedAt=1713345844512" alt="Testimonial Image">
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-12 order-1 order-xl-2">
                        <!--=== Testimonial Slider ===-->
                        <div class="testimonial-slider-one pl-lg-55 mb-40 wow fadeInRight">
                            <!--=== Testimonial Item ===-->
                            <div class="gw-testimonial-item">
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
                            <!--=== Testimonial Item ===-->
                            <div class="gw-testimonial-item">
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
                            <!--=== Testimonial Item ===-->
                            <div class="gw-testimonial-item">
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
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Testimonial Section ======-->
@endsection
