@extends('layouts.app')
@section('content')
<title>{{ $title . ' | ' . $home->site_title . ' | '. $home->site_description }}</title>

<livewire:breadcrumb title="{{ $post->name }}"  image="{{ asset($post->image) }}"/>

        <!--====== Start post Details Section ======-->
        <section class="blog-details-section pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8">
                        <!--=== Blog Details Wrapper ===-->
                        <div class="blog-details-wrapper pr-lg-50">
                            <div class="blog-post mb-60 wow fadeInUp">
                                <div class="post-thumbnail">
                                    <img src="{{ Storage::url($post->image) }}" alt="Blog Image">
                                </div>
                                <div class="post-meta text-center pt-25 pb-15 mb-25">
                                    <span><i class="far fa-user"></i><a href="#">{{ $post->author }}</a></span>
                                    <span><i class="far fa-calendar-alt"></i><a href="#">{{ $post->created_at->diffForHumans() }}</a></span>
                                    <span><i class="far fa-comment"></i><a href="#">Comments ({{ count($post->comments) }})</a></span>
                                </div>
                                <div class="main-post">
                                    <div class="entry-content">
                                        <h3 class="title">{{ $post->name }}</h3>
                                        <p>{{ $post->excerpt }}</p>

                                        <div>{{ $post->content }}</div>
                                        <blockquote class="block-quote">
                                            <img src="{{ asset('images/blog/quote.png') }}" alt="quote image">
                                            <h3>“Adventure is a path. Real adventure, self-determined, self-motivated, often risky, forces you to have firsthand encounters with the world.” </h3>
                                            <span>  Mark Jenkins</span>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="entry-footer wow fadeInUp">
                                    <div class="tag-links">
                                        <h6>Popular Tags</h6>
                                        <a href="#">Camping</a>
                                        <a href="#">Tent Camp</a>
                                        <a href="#">Couple Cabin</a>
                                    </div>
                                    <div class="social-share">
                                        <h6>Share News :</h6>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
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
                            <!--===  Post Navigation  ===-->
                            <div class="post-navigation-item pb-30 mb-55 wow fadeInUp">

                               @foreach ($recent_posts as $post)
                                <div class="prev-post post-nav-item d-flex mb-30">
                                    <div class="thumb">
                                        <img src="{{ Storage::url($post->image) }}" alt="Post Thumb">
                                    </div>
                                    <div class="content">
                                        <h6><a href="{{ Route('post.show', $post->id) }}">{{ $post->name }}</a></h6>
                                        <span class="post-date"><a href="{{ Route('post.show', $post->id) }}"><i class="far fa-calendar-alt"></i>{{ $post->created_at->diffForHumans() }}</a></span>
                                        <a  href="{{ Route('post.show', $post->id) }}">Read More <i class="far fa-arrow-right"></i></a>
                                    </div>
                                </div>
                                @endforeach


                            </div>

                            <!--===  Comments Area  ===-->
                            <div class="comments-area mb-60 wow fadeInUp">
                                <h5 class="comments-title mb-40">  Post Comments</h5>
                                <ul class="comments-list">
                                    <li>

                                        @forelse($post->comments as $comment)
                                        <div class="comment">
                                            <div class="comment-avatar">
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7e/Circle-icons-profile.svg/2048px-Circle-icons-profile.svg.png" alt="comment author">
                                            </div>
                                            <div class="comment-wrap">
                                                <div class="comment-author-content">
                                                    <span class="author-name">{{ $comment->name }}<span class="date">{{ $comment->created_at->diffForHumans() }}</span></span>
                                                    <p>{{ $comment->message }}</p>

                                                </div>
                                            </div>
                                        </div>
                                        @empty
                                             <p>No comments yet. Be the first to comment!</p>
                                        @endforelse

                                        @php
                                        switch (count($post->comments)) {
                                            case 0:
                                                echo "<p class='comments-title mb-40'>Be the first to comment on ".  $post->name  ." </p>";
                                                break;
                                            case 1:
                                                echo "<h5 class='comments-title mb-40'>" . count($post->comments) .  " Comment</h5>";
                                                break;

                                            default:
                                            echo "<h5 class='comments-title mb-40'>" . count($post->comments) .  " Comments</h5>";
                                                break;
                                        }

                                        @endphp

                                    </li>

                                </ul>
                            </div>
                            <!--===  Comments Form  ===-->
                            <div class="comments-respond mb-30 wow fadeInUp" id="comment-respond">
                                <h3 class="comments-heading">Leave a Comment</h3>
                                <p>Send us your valuable feedback about {{ $post->name }}</p>
                                <form class="comment-form" method="POST" action="{{ Route('comment.store') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form_group">
                                                <input type="email" class="form_control" placeholder="Email Address" name="email" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form_group">
                                                <input type="text" class="form_control" placeholder="Enter Name" name="name" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form_group">
                                                <textarea name="message" class="form_control" rows="4" placeholder="Write Comments"></textarea>
                                            </div>
                                        </div>
                                        @if(session('success'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            {{ session('success') }}

                                        </div>
                                        @endif
                                        <div class="col-lg-12">
                                            <div class="form_group">
                                                <input type="hidden" class="form_control"  name="post_id" value="{{ $post->id }}" required>
                                                <button class="main-btn primary-btn">Send comment<i class="fas fa-angle-double-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

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
                                        <img src="{{ Storage::url($post->image) }}" alt="post thumb">
                                        <div class="post-title-date">
                                            <h5><a href="{{ Route('post.show', $post->id) }}">{{ $post->name }}</a></h5>
                                            <span class="posted-on"><i class="far fa-calendar-alt"></i><a href="{{ Route('post.show', $post->id) }}">{{ $post->created_at->diffForHumans() }}</a></span>

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
