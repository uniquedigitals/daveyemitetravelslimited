@extends('layouts.app')
<title>{{ $title . ' | ' . $home->site_title . ' | '. $home->site_description }}</title>
@section('content')

<livewire:breadcrumb title="Our Services"  image="https://ik.imagekit.io/uniquedigitals/Dave%20Yemite%20Travels%20Limited/office/2.jpg?updatedAt=1705672100433"/>


        <!--====== Start Events Section ======-->
        <section class="events-section pt-100 pb-100">
            <div class="container">

                <div class="row justify-content-center">

                    @foreach($services as $service)
                        <div class="col-xl-4 col-md-6 col-sm-12">
                        <div class="single-event-item mb-30 wow fadeInUp">
                            <div class="img-holder">
                                <img src="{{ Storage::url($service->image) }}" alt="Service Image">
                            </div>
                            <div class="content">
                                <div class="meta">

                                    <h3 class="title"><a href="{{ Route('service.show', $service->id) }}">{{ $service->name }}</a></h3>
                                        <p>{{ $service->excerpt }}</p>
                                        <a href="{{ Route('service.show', $service->id) }}" class="main-btn filled-btn">Read More<i class="far fa-paper-plane"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                   @endforeach

                </div>

            </div>
        </section><!--====== End Events Section ======-->

@endsection
