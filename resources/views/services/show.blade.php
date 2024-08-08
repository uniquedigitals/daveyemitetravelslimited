@extends('layouts.app')
<title>{{ $title . ' | ' . $home->site_title . ' | '. $home->site_description }}</title>
@section('content')

<livewire:breadcrumb title="{{ $service->name }}"  image=" {{ Storage::url($service->image) }}"/>


        <!--====== Start service Details Section ======-->
        <section class="blog-details-section pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8">
                        <!--=== Blog Details Wrapper ===-->
                        <div class="blog-details-wrapper pr-lg-50">
                            <div class="blog-post mb-60 wow fadeInUp">
                                <div class="post-thumbnail">
                                    <img src=" {{ Storage::url($service->image) }}" alt="service Image">
                                </div>
                                <div class="post-meta text-center pt-25 pb-15 mb-25">

                                </div>
                                <div class="main-post">
                                    <div class="entry-content">
                                        <h3 class="title">{{ $service->name }}</h3>


                                        <div>{{ $service->content }}</div>

                                    </div>
                                </div>

                            </div>
                            <!--===  Post Author Box  ===-->
                            <div class="post-author-box d-flex pb-60 mb-60 wow fadeInUp">
                                <div class="author-thumb">
                                    <img src="{{ asset('images/logo/logo-black.png') }}" alt="post author">
                                </div>
                                <div class="author-content">
                                    <h5>Daveyemite Travels Limited</h5>
                                    <span class="position">Author</span>
                                    <p>We specialize in creating personalized and unique travel experiences for our clients.</p>
                                    <ul class="social-link">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="sidebar-widget-area">
                            <!--=== Search Widget ===-->
                            <div class="sidebar-widget search-widget mb-30 wow fadeInUp">
                                <h4 class="widget-title">Search</h4>
                                <form>
                                    <div class="form_group">
                                        <label><i class="far fa-search"></i></label>
                                        <input type="text" class="form_control" placeholder="Keywords" name="search" required>
                                    </div>
                                </form>
                            </div>
                            <!--=== Category Widget ===-->
                            <div class="sidebar-widget category-widget mb-30 wow fadeInUp">
                                <h4 class="widget-title">Category</h4>
                                <ul class="category-nav">
                                    <li><a href="#">Tent Camping<i class="far fa-arrow-right"></i></a></li>
                                    <li><a href="#">Family Camping<i class="far fa-arrow-right"></i></a></li>
                                    <li><a href="#">Wild Camping<i class="far fa-arrow-right"></i></a></li>
                                    <li><a href="#">Campfire <i class="far fa-arrow-right"></i></a></li>
                                    <li><a href="#">Luxury Cabin <i class="far fa-arrow-right"></i></a></li>
                                </ul>
                            </div>
                            <!--=== Recent Post Widget ===-->
                            <div class="sidebar-widget recent-post-widget mb-40 wow fadeInUp">
                                <h4 class="widget-title">Recent Newsletters</h4>
                                <ul class="recent-post-list">


                                @foreach ($recent_posts as $post)
                                    <li class="post-thumbnail-content">
                                        <img src="{{ $post->image }}" alt="post thumb">
                                        <div class="post-title-date">
                                            <h5><a href="{{ Route('post.show', $post->id) }}">{{ $post->name }}</a></h5>
                                            <span class="posted-on"><i class="far fa-calendar-alt"></i><a href="">{{ $post->created_at->diffForHumans() }}</a></span>

                                        </div>
                                    </li>
                                    @endforeach


                                </ul>
                            </div>
                            <!--=== Banner Widget ===-->
                            <div class="sidebar-widget sidebar-banner-widget wow fadeInUp mb-40">
                                <div class="banner-widget-content">
                                    <div class="banner-img">
                                        <img src="https://ik.imagekit.io/uniquedigitals/Dave%20Yemite%20Travels%20Limited/ads.jpg?updatedAt=1709712861924" alt="Post Banner">
                                        <div class="hover-overlay">
                                            <div class="hover-content">
                                                <h4 class="title">Work in Europe</h4>
                                                <p><a href="{{ Route('application.index') }}">Begin your Application <i class="fas fa-arrow-right"></i></a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--=== Tag Widget ===-->
                            <div class="sidebar-widget tag-cloud-widget gray-bg mb-40 wow fadeInUp">
                                <h4 class="widget-title">Recent Tags</h4>
                                <a href="#">Tourism</a>
                                <a href="#">Traveling</a>
                                <a href="#">Work and Stay</a>
                                <a href="#">Travel Visa</a>
                                <a href="#">Visiting Visa</a>
                                <a href="#">Visas</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Blog Details Section ======-->
@endsection
