@extends('layouts.app')
@section('content')
<title>{{ $title . ' | ' . $home->site_title . ' | '. $home->site_description }}</title>

<livewire:breadcrumb title="Pre-application form"  image="https://ik.imagekit.io/uniquedigitals/Dave%20Yemite%20Travels%20Limited/6?updatedAt=1705103393641"/>

        <!--====== Start Contact Section ======-->
        <section class="contact-section pb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="section-title text-center mb-50 wow fadeInDown">
                        <span class="sub-title">Begin your Journey</span>
                            <h2>Our Pre-application Form</h2>

                            <p>Please provide your essential details to kickstart the journey with Daveyemite Travels Limited.</p>

                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="contact-area wow fadeInUp">
                            <form class="contact-form" method="POST" action="{{ Route('application.store')}}">
                                @csrf
                                <div class="row">

                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="text" placeholder="First Name" class="form_control" name="first_name" value="{{ old('first_name')}}" autocomplete="on">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="text" placeholder="Surname" class="form_control" name="surname" value="{{ old('surname')}}" autocomplete="on">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <select class="wide form_control" name="sex">
                                                <option data-display="Sex">Sex</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <label for="dob">Date of Birth</label>
                                            <input type="date" placeholder="{{ time() }}" class="form_control " name="dob"  required value="{{ old('dob')}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">


                                        <div class="form_group">
                                            <select class="wide form_control" name="marital_status">
                                                <option data-display="Marital Status">Marital Status</option>
                                                <option value="single">Single</option>
                                                <option value="engaged">Engaged</option>
                                                <option value="married">Married</option>
                                                <option value="divorced">Divorced</option>
                                                <option value="widowed">Widowed</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <select class="wide form_control" name="visa_choice">
                                                    <option data-display="Category">Category</option>
                                                @foreach($services as $service)
                                                    <option value="{{ $service->name }}">{{ $service->name }}</option>
                                                @endforeach


                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        @php
                                    $countries = array( "Nigeria", "Afghanistan", "Albania", "Algeria",  "Angola",  "Antarctica", "Argentina",  "Australia", "Austria","Azerbaijan", "Bahamas",  "Bangladesh",  "Belgium", "Belize", "Benin", "Bermuda", "Bolivia",  "Botswana", "Bouvet Island", "Brazil", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island",  "Colombia", "Comoros", "Congo", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark",  "Dominica", "Dominican Republic",  "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)",  "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)",  "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan",  "Kenya","Kiribati", "Democratic People's Republic of Korea", "Kuwait", "People's Democratic Republic of Lao",  "Lebanon", "Lesotho", "Liberia", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia,", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Federated States of Micronesia", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");
                                @endphp
                                       <div class="form_group">
                                            <select class="wide form_control" name="nationality" id="nationality" required >
                                                <option data-display="Country">Country Applying From</option>
                                                @foreach($countries as $country)
                                                <option value="{{ $country }}">{{ $country }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    @php
                                        $states = array( "Abia","Adamawa","Akwa Ibom","Anambra","Bauchi","Bayelsa","Benue","Borno","Cross River","Delta","Ebonyi","Edo","Ekiti","Enugu","FCT - Abuja","Gombe","Imo","Jigawa","Kaduna","Kano","Katsina","Kebbi","Kogi","Kwara","Lagos","Nasarawa","Niger","Ogun","Ondo","Osun","Oyo","Plateau","Rivers","Sokoto","Taraba","Yobe","Zamfara");
                                    @endphp
                                    <div class="col-lg-6" id="state">
                                       <div class="form_group">
                                            <select class="wide form_control" name="state">
                                                <option data-display="State">Choose State</option>
                                                @foreach($states as $state)
                                                <option value="{{ $state }}">{{ $state }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="tel" placeholder="Phone Number (+234 ...)" class="form_control" name="phone" value="{{ old('phone')}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="email" placeholder="Email Address" class="form_control" name="email" value="{{ old('email')}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form_group">
                                            <textarea name="special_request" placeholder="Special Request (Optional)" class="form_control" rows="3">{{ old('special_request')}}</textarea>
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
                                    <div class="col-lg-12">
                                        <div class="form_group text-center">
                                            <button class="main-btn primary-btn">Submit Now<i class="fas fa-paper-plane"></i></button>
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
