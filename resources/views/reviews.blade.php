@extends('layouts.app')
@section('content')
<title>{{ $title . ' | ' . $home->site_title . ' | '. $home->site_description }}</title>
<livewire:breadcrumb title="Reviews" image="https://ik.imagekit.io/uniquedigitals/Dave%20Yemite%20Travels%20Limited/office/2.jpg?updatedAt=1705672100433" />

        <!--====== Start Testimonial Section ======-->
        <section  class="testimonial-section bg_cover pt-100 pb-100" style="background-image: url({{ asset('images/bg/map-bg.jpg')}});">
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
                <a href="https://g.page/r/CfRnn5WrI4LAEAI/review" target="_blank" class="main-btn secondary-btn">Add a Review<i class="fas fa-paper-plane"></i></a>

            </div>

        </section><!--====== End Testimonial Section ======-->


        @endsection
