
@extends('layouts.app')
@section('content')
<title>{{ $title . ' | ' . $home->site_title . ' | '. $home->site_description }}</title>
<livewire:breadcrumb  title="Search Result"  image="https://ik.imagekit.io/uniquedigitals/Dave%20Yemite%20Travels%20Limited/office/2.jpg?updatedAt=1705672100433"/>

        <!--====== Start Gallery Section ======-->
        <section class="gallery-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    @if(count($results) == 0 )
                                 <h2>No result found for <span style="color: #007DE6">"{{ $search }}"</span> </h2>
                            @elseif(count($results) == 1)
                                <h2> {{count($results)}} result found matching  <span style="color: #007DE6">"{{ $search }}"</span></h2>
                            @else
                                <h2>{{count($results)}} results found matching  <span style="color: #007DE6">"{{ $search }}"</span></h2>
                            @endif


                @foreach ($results as $result)

                     @if (class_basename($result) == 'Project')
                            <div class="card" style="margin-top: 2vw">
                                <h5 class="card-header">{{ class_basename($result) }}</h5>
                                <div class="card-body">
                                <h5 class="card-title">{{ $result->name }}</h5>
                                <p class="card-text">{{ $result->excerpt }}</p>
                                <a href="#" class="btn btn-primary">Read more</a>
                                </div>
                            </div>



                     @elseif (class_basename($result) == 'Post')
                     <div class="card" style="margin-top: 2vw">
                            <h5 class="card-header">{{ class_basename($result) }}</h5>
                            <div class="card-body">
                            <h5 class="card-title">{{ $result->name }}</h5>
                            <p class="card-text">{{ $result->excerpt }}</p>
                            <a href="{{Route('post.show', $result->id )}}" class="btn btn-primary">Read more</a>
                            </div>
                        </div>




                     @elseif (class_basename($result) == 'Service')
                     <div class="card" style="margin-top: 2vw">
                        <h5 class="card-header">{{ class_basename($result) }}</h5>
                        <div class="card-body">
                        <h5 class="card-title">{{ $result->name }}</h5>
                        <p class="card-text">{{ $result->excerpt }}</p>
                        <a href="{{Route('service.show', $result->id )}}" class="btn btn-primary">Read more</a>
                        </div>
                    </div>



                     @else
                        <p>No result found matching {{ $search }}</p>

                     @endif
                @endforeach

            </div>
            </div>
        </section><!--====== End Gallery Section ======-->
        @endsection
