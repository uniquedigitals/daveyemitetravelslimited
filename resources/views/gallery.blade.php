
@extends('layouts.app')
@section('content')
<title>{{ $title . ' | ' . $home->site_title . ' | '. $home->site_description }}</title>
<livewire:breadcrumb title="Our Media Gallery"  image="https://ik.imagekit.io/uniquedigitals/Dave%20Yemite%20Travels%20Limited/office/2.jpg?updatedAt=1705672100433"/>

        <!--====== Start Gallery Section ======-->
        <section class="gallery-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    @foreach($galleries as $i)
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <!--=== Single Gallery Item ===-->
                        <div class="single-gallery-item mb-30 wow fadeInUp">
                            <div class="gallery-img">
                                <img src="{{ Storage::url($i->image) }}" alt="Gallery Image">
                                <div class="hover-overlay">
                                    <a href="{{ Storage::url($i->image) }}" class="icon-btn img-popup"><i class="far fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                       @endforeach

                </div>
            </div>
        </section><!--====== End Gallery Section ======-->
        @endsection
