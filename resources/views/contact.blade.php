

@extends('layouts.app')
@section('content')
<title>{{ $title . ' | ' . $home->site_title . ' | '. $home->site_description }}</title>
<livewire:breadcrumb title="Contact Us"  image="https://ik.imagekit.io/uniquedigitals/Dave%20Yemite%20Travels%20Limited/office/2.jpg?updatedAt=1705672100433"/> <!--====== Start Info Section ======-->
        <section class="contact-info-section pt-100 pb-60">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <!--=== Section Title ===-->
                        <div class="section-title text-center mb-45 wow fadeInDown">
                            <span class="sub-title">Contact Us</span>
                            <h2>Ready to Get Our Best Services!
                            Feel Free to Contact With Us</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <!--=== Contact Info Item ===-->
                        <div class="contact-info-item text-center mb-40 wow fadeInUp">
                            <div class="icon">
                                <img src="{{ asset('images/icon/icon-1.png') }}" alt="icon">
                            </div>
                            <div class="info">
                                <span class="title">Office Address</span>
                                <p><a href="https://maps.app.goo.gl/6QdLDJ69ZyPBnrzo8">Gbaagi Junction, Ilupeju Estate off Olorunda - Abaa Road Akobo Ojurin Ibadan Oyo State Nigeria.</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <!--=== Contact Info Item ===-->
                        <div class="contact-info-item text-center mb-40 wow fadeInDown">
                            <div class="icon">
                                <img src="{{ asset('images/icon/icon-2.png') }}" alt="icon">
                            </div>
                            <div class="info">
                                <span class="title">Email Addresses</span>
                                <p><a href="mailto:info@daveyemitetravelslimited.org">info@daveyemitetravelslimited.org</a></p>
                                <p><a href="mailto:support@daveyemitetravelslimited.org">support@daveyemitetravelslimited.org</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <!--=== Contact Info Item ===-->
                        <div class="contact-info-item text-center mb-40 wow fadeInUp">
                            <div class="icon">
                                <img src="{{ asset('images/icon/icon-3.png') }}" alt="icon">
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
        <!--====== Start Contact Map Section ======-->
        <section class="contact-page-map pb-100 wow fadeInUp">
            <!--=== Map Box ===-->
            <div class="map-box">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.056617385663!2d3.951793173737061!3d7.458989011588495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1039edf2fb710935%3A0xc08223ab959f67f4!2sDaveyemite%20Travels%20Limited!5e0!3m2!1sen!2sng!4v1717153049725!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


            </div>
        </section><!--====== End Contact Map Section ======-->
        <!--====== Start Contact Section ======-->
        <section class="contact-section pb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="section-title text-center mb-50 wow fadeInDown">
                            <span class="sub-title">Get In Touch</span>
                            <h2>Send Us Message</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="contact-area wow fadeInUp">
                            <form class="contact-form" action="{{ Route('contact.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="text" placeholder="Name" class="form_control" name="name" value="{{ old('name') }}" >
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="text" placeholder="Phone Number" class="form_control" name="phone" value="{{ old('phone') }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="email" placeholder="Email Address" class="form_control" name="email" required value="{{ old('email') }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <select class="wide form_control" name="categories">
                                                <option data-display="Visa Category">Department</option>
                                                <option value="Students Visa">Student Visas</option>
                                                <option value="Visiting Visa">Visiting Visas</option>
                                                <option value="EDU Consult">EDU Consult</option>
                                                <option value="Flight Ticket">Flight Ticket</option>
                                                <option value="General Enquiry">General Enquiry</option>
                                                <option value="Payment Complaint">Payment Complaint</option>
                                                <option value="Front Desk">Front Desk</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form_group">
                                            <textarea name="message" placeholder="Write Message" class="form_control" rows="6" >{{ old('message') }}</textarea>
                                        </div>
                                    </div>
                                    @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                     @endif
                                    @if(session('success'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            {{ session('success') }}

                                        </div>
                                        @endif
                                    <div class="col-lg-12">
                                        <div class="form_group text-center">
                                            <button class="main-btn primary-btn">Send Message<i class="fas fa-paper-plane"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Contact Section ======-->
    @endsection

