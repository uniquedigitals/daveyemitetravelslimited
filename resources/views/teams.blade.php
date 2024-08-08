@extends('layouts.app')
@section('content')
<title>{{ $title . ' | ' . $home->site_title . ' | '. $home->site_description }}</title>
<livewire:breadcrumb title="Our Management Team" image="https://ik.imagekit.io/uniquedigitals/Dave%20Yemite%20Travels%20Limited/office/2.jpg?updatedAt=1705672100433" />
        <!--====== Start Contact Section ======-->
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
@endsection
