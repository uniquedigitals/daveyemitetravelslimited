@extends('layouts.app')
@section('content')
<title>{{ $title . ' | ' . $home->site_title . ' | '. $home->site_description }}</title>

<livewire:breadcrumb title="Our Blogs"  image="https://ik.imagekit.io/uniquedigitals/Dave%20Yemite%20Travels%20Limited/office/2.jpg?updatedAt=1705672100433"/>


        <!--====== Start Blog Section ======-->
        <section class="blog-list-section pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8">
                        <!--=== Blog List Wrapper ===-->
                        <div class="blog-list-wrapper">
                       @foreach($posts as $post)
                            <!--=== Single post Post ===-->
                            <div class="single-blog-post-four mb-30 wow fadeInDown">
                                <div class="post-thumbnail">
                                    <img src="{{ Storage::url($post->image) }}" alt="Post Image">
                                </div>
                                <div class="entry-content">
                                    <div class="post-meta">
                                        <span><i class="far fa-calendar-alt"></i><a href="{{ Route('post.show', $post->id) }}">{{ $post->created_at->diffForHumans() }}</a></span>
                                    </div>
                                    <h3 class="title"><a href="{{ Route('post.show', $post->id) }}">{{ $post->name }}</a></h3>
                                    <p>{{ $post->excerpt }}</p>
                                    <h6 class="author"><i class="far fa-user"></i><a href="{{ Route('post.show', $post->id) }}">{{ $post->author }}</a></h6>
                                    <a href="{{ Route('post.show', $post->id) }}" class="main-btn filled-btn">Read More<i class="fas fa-paper-plane"></i></a>
                                </div>
                            </div>
                        @endforeach


                        </div>
                        <!--=== Pagination ===-->
                        <ul class="gowilds-pagination wow fadeInDown mt-60 mb-30">
                            <li><a href="#"><i class="far fa-arrow-left"></i></a></li>
                            <li><a href="#" class="active">01</a></li>
                            <li><a href="#">02</a></li>
                            <li><a href="#">03</a></li>
                            <li><a href="#">04</a></li>
                            <li><a href="#"><i class="far fa-arrow-right"></i></a></li>
                        </ul>
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
                                <h4 class="widget-title">Products Tags</h4>
                                <a href="#">Camping</a>
                                <a href="#">Tent Camp</a>
                                <a href="#">Campfire</a>
                                <a href="#">Luxury Cabin</a>
                                <a href="#">Safari Tent</a>
                                <a href="#">House Tree</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End post Section ======-->
        </body>
</html>

@endsection
