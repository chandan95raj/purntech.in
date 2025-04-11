@extends('web.app')

@section('content')
    <div class="b_to_c-page">
        <div class="container col-xxl-10 px-4 py-5 section_1">
            <div class="overlay_div_gradient"></div>
            <div class="row flex-lg-row-reverse align-items-center g-5 pt-4 pb-4">

                <div class="col-lg-12 text-center mb-4">
                    <h1 class="display-5 fw-bold lh-2 mb-3 text-white">B2C <span>Product</span></h1>
                    <p class="lead text-white about_text_gray">Elevate your customer experience with our advanced
                        B2C software and fintech tools. From user-friendly payment systems to cutting-edge financial
                        solutions, our products are designed to streamline operations and enhance satisfaction.</p>

                </div>
            </div>
        </div><!-- container -->
        <section id="sectionOne">
            <div class="container-fluid about py-5">
                <div class="container dedicatedResource py-5">
                    <div class="row g-5 align-items-center">
                        <div class="col-xl-7 wow fadeInLeft" data-wow-delay="0.2s"
                            style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
                            <div>
                                <!-- <h4 class="text-primary">About Us</h4> -->
                                <h1 class="display-5 mb-4 text-white">Transform Your Business with Cutting-Edge
                                    Solutions</h1>
                                <p class="mb-4 text-white ms-0">Our software helps you improve customer
                                    satisfaction, streamline operations, and stay competitive. Leverage our
                                    cutting-edge technology to boost your profits and strengthen your brand in the
                                    dynamic consumer market.


                                </p>
                                <div class="row g-4">
                                    <div class="col-md-6 col-lg-6 col-xl-6">
                                        <div class="d-flex">
                                            <div><i class="fa fa-credit-card-alt fa-3x text-orange"></i></div>
                                            <div class="ms-4">
                                                <h4 class="text-white ms-0"
                                                    style="line-height: 26px;margin-bottom: 6px;">Optimize B2C
                                                    Operations</h4>
                                                <p class="text-white ms-0">Enhance your B2C operations for
                                                    increased efficiency and better performance.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xl-6">
                                        <div class="d-flex">
                                            <div><i class="fa fa-check-square fa-3x text-orange"></i></div>
                                            <div class="ms-4">
                                                <h4 class="text-white ms-0"
                                                    style="line-height: 26px;margin-bottom: 6px;">Streamline Your
                                                    B2C Processes Efficiently</h4>
                                                <p class="text-white ms-0">Simplify and automate your B2C processes
                                                    for smoother, more efficient operations.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <p>Stay ahead of the competition with technology that adapts to your
                                            customers' needs.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s"
                            style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInRight;">
                            <div class="bg-primary rounded position-relative overflow-hidden">
                                <img src="{{asset('web/images/about-2.png')}}" class="img-fluid rounded w-100" alt="">

                                <div class="" style="position: absolute; top: -15px; right: -15px;">
                                    <img src="{{asset('web/images/about-3.png')}}" class="img-fluid"
                                        style="width: 150px; height: 150px; opacity: 0.7;" alt="">
                                </div>
                                <div class=""
                                    style="position: absolute; top: -20px; left: 10px; transform: rotate(90deg);">
                                    <img src="{{asset('web/images/about-4.png')}}" class="img-fluid"
                                        style="width: 100px; height: 150px; opacity: 0.9;" alt="">
                                </div>
                                <div class="rounded-bottom">
                                    <img src="{{asset('web/images/about-5.jpg')}}" class="img-fluid rounded-bottom w-100"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="sectionTwo">

            <div class="container-fluid service pb-5">
                <div class="container pb-5">
                    <div class="text-center mx-auto pb-5">
                        <h4 class="text-orange">Our Solutions</h4>
                        <h1 class="display-5 mb-4 text-white">Core Advantages of Our Solutions</h1>
                        <p class="mb-0 text-white">Our team of skilled engineers and developers brings a wealth of
                            experience to creating top-notch software and fintech solutions. </p>
                    </div>
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-4">
                            <div class="service-item">
                                <div class="service-img">
                                    <img src="{{asset('web/images/service-1.jpg')}}" class="img-fluid rounded-top w-100"
                                        alt="Image">
                                </div>
                                <div class="rounded-bottom p-2 mt-2">
                                    <a href="#" class="h4 d-inline-block mb-2 text-white">Automated
                                        Reminders </a>
                                    <p class="mb-4 text-white">Never miss a rental due date with smart automated
                                        reminders. Choose your preferred payment method from a variety of secure
                                        options, ensuring ultimate convenience.</p>
                                    <!--  <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="service-item">
                                <div class="service-img">
                                    <img src="{{asset('web/images/service-2.jpg')}}" class="img-fluid rounded-top w-100"
                                        alt="Image">
                                </div>
                                <div class="rounded-bottom p-2 mt-2">
                                    <a href="#" class="h4 d-inline-block mb-2 text-white">Secure
                                        Transactions </a>
                                    <p class="mb-4 text-white">Your safety comes first. Our advanced encryption
                                        safeguards every transaction, giving you peace of mind. Enjoy instant
                                        payment confirmations and a clear record of all transactions.</p>
                                    <!-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="service-item">
                                <div class="service-img">
                                    <img src="{{asset('web/images/service-3.jpg')}}" class="img-fluid rounded-top w-100"
                                        alt="Image">
                                </div>
                                <div class="rounded-bottom p-2 mt-2">
                                    <a href="#" class="h4 d-inline-block mb-2 text-white">Customized
                                        Notifications </a>
                                    <p class="mb-4 text-white">Get alerts your way—via email or mobile. Our
                                        flexible notification system keeps you updated, while the easy-to-use
                                        platform makes online payments simple for everyone.</p>
                                    <!-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="service-item">
                                <div class="service-img">
                                    <img src="{{asset('web/images/service-4.jpg')}}" class="img-fluid rounded-top w-100"
                                        alt="Image">
                                </div>
                                <div class="rounded-bottom p-2 mt-2">
                                    <a href="#" class="h4 d-inline-block mb-2 text-white">Detailed Payment
                                        History </a>
                                    <p class="mb-4 text-white">Effortlessly access your complete rental payment
                                        history anytime. Our 24/7 accessible system allows you to review past
                                        payments and statements with ease.</p>
                                    <!-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="service-item">
                                <div class="service-img">
                                    <img src="{{asset('web/images/service-5.jpg')}}" class="img-fluid rounded-top w-100"
                                        alt="Image">
                                </div>
                                <div class="rounded-bottom p-2 mt-2">
                                    <a href="#" class="h4 d-inline-block mb-2 text-white">Automated
                                        Reminders </a>
                                    <p class="mb-4 text-white">Stay organized with timely reminders for all rental
                                        payments. Select from a range of payment methods and platforms for a
                                        seamless experience.
                                    </p>
                                    <!-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="service-item">
                                <div class="service-img">
                                    <img src="{{asset('web/images/service-6.jpg')}}" class="img-fluid rounded-top w-100"
                                        alt="Image">
                                </div>
                                <div class="rounded-bottom p-2 mt-2">
                                    <a href="#" class="h4 d-inline-block mb-2 text-white">Secure
                                        Transactions </a>
                                    <p class="mb-4 text-white">Trust in our top-tier encryption to secure your
                                        payments. Instant confirmations ensure transparency, while maintaining a
                                        perfect log of your transactions.</p>
                                    <!-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section class="sectionThree">
            <div class="container">
                <div class="row g-5 pb-5">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
                        <div class="feature-img RotateMoveLeft">
                            <img src="{{asset('web/images/b2c_features.png')}}" class="img-fluid w-100 h-100" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.1s"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInRight;">
                        <h4 class="text-orange">Products</h4>
                        <h1 class="display-5 mb-4 text-white">New Gen B2C Software & Fintech Solutions for Future
                            Growth</h1>
                        <p class="mb-4 text-white">Adopt forward-thinking B2C software and fintech solutions that
                            anticipate trends, drive innovation, and propel your business into the future. Embrace
                            technology that not only enhances efficiency but also positions you ahead of the
                            competition in a rapidly evolving market.
                        </p>
                        <div class="row g-4">
                            <div class="col-12">
                                <p class="mb-4 text-white">Our solutions are more than just software—they're a
                                    catalyst for your business growth. Let's grow together. <br><br>Connect with our
                                    project managers to explore how we can help you expand and innovate.
                                </p>
                            </div>

                        </div>
                        <!--  <div class="my-4">
                        <a href="#" class="btn btn-primary rounded-pill py-3 px-5">Read More</a>
                    </div> -->
                    </div>
                </div>
            </div>
        </section>

        <section class="sectionFour">
            <div class="container pt-5">
                <div class="bg-lightBlack rounded-3 py-5 px-3 px-md-0">
                    <div class="row justify-content-center mb-2 py-md-2 py-lg-4">
                        <div class="col-lg-10 col-md-11">
                            <h2 class="pb-3 text-white text-center mb-3">B2C Fintech Software</h2>
                            <div class="row row-cols-1 row-cols-md-3 g-4">

                                <!-- Item -->
                                <div class="col">
                                    <div class="card h-100 border-0 shadow-sm p-md-2 p-lg-1">
                                        <div class="card-body d-flex align-items-center">
                                            <div class="bg-primary shadow-primary rounded-3 flex-shrink-0 p-3">
                                                <img src="{{asset('web/images/mobileRecharge.png')}}" />
                                            </div>
                                            <div class="ms-lg-3">
                                                <h3>Recharge</h3>
                                                <p>Quick, hassle-free recharges at your fingertips</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Item -->
                                <div class="col">
                                    <div class="card h-100 border-0 shadow-sm p-md-2 p-lg-1">
                                        <div class="card-body d-flex align-items-center">
                                            <div class="bg-primary shadow-primary rounded-3 flex-shrink-0 p-3">
                                                <img src="{{asset('web/images/bbps.png')}}" />
                                            </div>
                                            <div class="ms-lg-3">
                                                <h3>BBPS</h3>
                                                <p>Pay all your bills in one place, securely and instantly</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Item -->
                                <div class="col">
                                    <div class="card h-100 border-0 shadow-sm p-md-2 p-lg-1">
                                        <div class="card-body d-flex align-items-center">
                                            <div class="bg-primary shadow-primary rounded-3 flex-shrink-0 p-3">
                                                <img src="{{asset('web/images/aeps.png')}}" />
                                            </div>
                                            <div class="ms-lg-3">
                                                <h3>AEPS</h3>
                                                <p>Banking services simplified with Aadhaar-enabled payments</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Item -->
                                <div class="col">
                                    <div class="card h-100 border-0 shadow-sm p-md-2 p-lg-1">
                                        <div class="card-body d-flex align-items-center">
                                            <div class="bg-primary shadow-primary rounded-3 flex-shrink-0 p-3">
                                                <img src="{{asset('web/images/dmt.png')}}" />
                                            </div>
                                            <div class="ms-lg-3">
                                                <h3>DMT</h3>
                                                <p>Fast and secure domestic money transfers, anytime, anywhere</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Item -->
                                <div class="col">
                                    <div class="card h-100 border-0 shadow-sm p-md-2 p-lg-1">
                                        <div class="card-body d-flex align-items-center">
                                            <div class="bg-primary shadow-primary rounded-3 flex-shrink-0 p-3">
                                                <img src="{{asset('web/images/uti_pancard.png')}}" />
                                            </div>
                                            <div class="ms-lg-3">
                                                <h3>UTI (Pancard)</h3>
                                                <p>Seamless PAN card applications with expert assistance</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Item -->
                                <div class="col">
                                    <div class="card h-100 border-0 shadow-sm p-md-2 p-lg-1">
                                        <div class="card-body d-flex align-items-center">
                                            <div class="bg-primary shadow-primary rounded-3 flex-shrink-0 p-3">
                                                <img src="{{asset('web/images/bus-booking.png')}}" />
                                            </div>
                                            <div class="ms-lg-3">
                                                <h3>Bus Booking</h3>
                                                <p>Book your bus journeys with ease, comfort, and savings</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Item -->
                                <div class="col">
                                    <div class="card h-100 border-0 shadow-sm p-md-2 p-lg-1">
                                        <div class="card-body d-flex align-items-center">
                                            <div class="bg-primary shadow-primary rounded-3 flex-shrink-0 p-3">
                                                <img src="{{asset('web/images/flight_booking.png')}}" />
                                            </div>
                                            <div class="ms-lg-3">
                                                <h3>Flight Booking</h3>
                                                <p>Fly anywhere with the best deals and a simple booking process.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Item -->
                                <div class="col">
                                    <div class="card h-100 border-0 shadow-sm p-md-2 p-lg-1">
                                        <div class="card-body d-flex align-items-center">
                                            <div class="bg-primary shadow-primary rounded-3 flex-shrink-0 p-3">
                                                <img src="{{asset('web/images/hotel_booking.png')}}" />
                                            </div>
                                            <div class="ms-lg-3">
                                                <h3>Hotel Booking</h3>
                                                <p>Find and book the perfect stay at unbeatable prices.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Item -->
                                <div class="col">
                                    <div class="card h-100 border-0 shadow-sm p-md-2 p-lg-1">
                                        <div class="card-body d-flex align-items-center">
                                            <div class="bg-primary shadow-primary rounded-3 flex-shrink-0 p-3">
                                                <img src="{{asset('web/images/travel.png')}}" />
                                            </div>
                                            <div class="ms-lg-3">
                                                <h3>Aadhar Verification</h3>
                                                <p>Instant Aadhaar verification for secure and swift services</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Item -->
                                <div class="col">
                                    <div class="card h-100 border-0 shadow-sm p-md-2 p-lg-1">
                                        <div class="card-body d-flex align-items-center">
                                            <div class="bg-primary shadow-primary rounded-3 flex-shrink-0 p-3">
                                                <img src="{{asset('web/images/travel.png')}}" />
                                            </div>
                                            <div class="ms-lg-3">
                                                <h3>Pan card Verification</h3>
                                                <p>Verify PAN details instantly for hassle-free transactions</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Item -->
                                <div class="col">
                                    <div class="card h-100 border-0 shadow-sm p-md-2 p-lg-1">
                                        <div class="card-body d-flex align-items-center">
                                            <div class="bg-primary shadow-primary rounded-3 flex-shrink-0 p-3">
                                                <img src="{{asset('web/images/travel.png')}}" />
                                            </div>
                                            <div class="ms-lg-3">
                                                <h3>Vehicle Verification</h3>
                                                <p>Check vehicle ownership and details with ease</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Item -->
                                <div class="col">
                                    <div class="card h-100 border-0 shadow-sm p-md-2 p-lg-1">
                                        <div class="card-body d-flex align-items-center">
                                            <div class="bg-primary shadow-primary rounded-3 flex-shrink-0 p-3">
                                                <img src="{{asset('web/images/travel.png')}}" />
                                            </div>
                                            <div class="ms-lg-3">
                                                <h3>Cibil Score</h3>
                                                <p>Monitor your CIBIL score to stay credit-ready</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection