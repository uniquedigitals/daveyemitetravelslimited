@extends('layouts.app')
@section('content')
<title>{{ $title . ' | ' . $home->site_title . ' | '. $home->site_description }}</title>
<livewire:breadcrumb title="Frequently Asked Questions"  image="https://ik.imagekit.io/uniquedigitals/Dave%20Yemite%20Travels%20Limited/office/2.jpg?updatedAt=1705672100433"/>

        <!--====== Start Contact Section ======-->
        <section class="contact-section pb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="section-title text-center mb-50 wow fadeInDown" style="margin-top: 5vw">

                            <h2>Our Frequently Asked Questions</h2>

                            <p>Find Quick answers to every questions</p>

                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="contact-area wow fadeInUp">
                           <div class="accordion" id="accordionExample">

                           <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
      <span class="text-secondary text-opacity-50">Q1.</span> What kind of travel services does Daveyemite Travels Limited offer?

      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      Daveyemite Travels Limited offers a wide range of travel services including flight bookings, hotel reservations, tour packages, car rentals, visa assistance, Edu consult, and travel insurance, etc.
      </div>
    </div>
  </div>
    @foreach ($faqs as $faq)
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed mybtn" type="button" data-bs-toggle="collapse" data-bs-target="#{{ $faq->id }}" aria-expanded="false" aria-controls="collapseTwo">
       <span class="text-secondary text-opacity-50">Q{{ $faq->id }}.</span>   {{ $faq->question }}
      </button>
    </h2>
    <div id="{{ $faq->id }}" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        {{ $faq->answer }}
      </div>
    </div>
  </div>
  @endforeach

</div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Contact Section ======-->

@endsection
