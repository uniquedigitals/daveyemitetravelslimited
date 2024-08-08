
@extends('layouts.app')
@section('content')
<title>{{ $title . ' | ' . $home->site_title . ' | '. $home->site_description }}</title>


    <livewire:breadcrumb title="Download Application Form"  image="https://ik.imagekit.io/uniquedigitals/Dave%20Yemite%20Travels%20Limited/6?updatedAt=1705103393641"/>
        <!--====== Start Products Section ======-->
        <section class="products-section pt-100 pb-90">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="section-title text-center mb-50 wow fadeInDown">

                            <h2> Download Application Form</h2>
                            <h6> Hello,  {{ $applications['first_name']}}  Your Application ID is <span class="bold-text-blue underline"> #{{ $user_id }}</span> </h6>
                            <p> Your pre-application form for {{ $applications['visa_choice']}}  has been received successfully.</p>
                            <a href="{{ asset('application-form/application-form.pdf')}}" download="Application Form | Daveyemite Travels Limited"><button class="main-btn primary-btn mt-4">Download Application Form<i class="fas fa-download"></i></button></a>
                        </div>
                        <p class="bold-text-blue" style="color:#5cb85c"> A confirmation mail has been sent to you via {{ $applications['email']}} </p>
                        <h6>What's Next?</h6>
                        <p> After downloading the form, kindly fill with accurate information, Kindly visit our  office address at Gbaagi Junction, Ilupeju Estate off Olorunda - Abaa Road Akobo Ojurin Ibadan Oyo State Nigeria. for your appointment</p>
                        <a href="https://maps.app.goo.gl/EjoWSYw5vzp264p99" target="_blank" class="bold-text-blue underline"> Find us on Google Maps</a>


                    </div>
                </div>
                <!--====== Products Filter ======-->



                </div>

            </div>
        </section><!--====== End Products Section ======-->
        <!--====== Start Info Section ======-->
         <section class="contact-info-section pt-100 pb-60">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <!--=== Section Title ===-->
                        <div class="section-title text-center mb-45 wow fadeInDown">

                            <h2>Do you need Help?</h2>
                            <p>Do not hesitate to contact us below</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <!--=== Contact Info Item ===-->
                        <div class="contact-info-item text-center mb-40 wow fadeInUp">
                            <div class="icon">
                                <img src="{{ asset('images/icon/icon-1.png')}}" alt="icon">
                            </div>
                            <div class="info">
                                <span class="title">Office Address</span>
                                <p><a href="https://maps.app.goo.gl/SNvhtfHxgydokPRi6" target="_blank" > Gbaagi Junction, Ilupeju Estate off Olorunda - Abaa Road Akobo Ojurin Ibadan Oyo State Nigeria.</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <!--=== Contact Info Item ===-->
                        <div class="contact-info-item text-center mb-40 wow fadeInDown">
                            <div class="icon">
                                <img src="{{ asset('images/icon/icon-2.png')}}" alt="icon">
                            </div>
                            <div class="info">
                                <span class="title">Email Addresses</span>
                                <p><a href="mailto:info@daveyemitetravelslimited.org">info@daveyemite <br> travelslimited.org</a></p> <br>
                                <p><a href="mailto:support@daveyemitetravelslimited.org">support@daveyemite <br> travelslimited.org</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <!--=== Contact Info Item ===-->
                        <div class="contact-info-item text-center mb-40 wow fadeInUp">
                            <div class="icon">
                                <img src="{{ asset('images/icon/icon-3.png')}}" alt="icon">
                            </div>
                            <div class="info">
                                <span class="title">Hotlines</span>
                                 <p><a href="tel:+447415463075 ">+44 (741) 546 3075 <i class="fas fa-phone-alt"></i></a></p>
                                 <p><a href="tel:+2349035173282">+234 (903) 517 3282 <i class="fas fa-phone-alt"></i></a></p>
                                <p><a href="https://wa.me/+2347089908306">+234 (708) 990 8306 <i class="fab fa-whatsapp"></i></a> </p>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Info Section ======-->
@endsection

