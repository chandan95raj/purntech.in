@extends('web.app')

@section('content')
    <div class="b_to_c-page">
        <div class="container col-xxl-10 px-4 py-5 section_1">
            <div class="overlay_div_gradient"></div>
            <div class="row flex-lg-row-reverse align-items-center g-5 pt-4 pb-4">
                <div class="col-lg-12 text-center mb-4">
                    <h1 class="display-5 fw-bold lh-2 mb-3 text-white">B2B <span>Product</span></h1>
                    <p class="lead text-white about_text_gray">Provide top-tier B2B software and fintech solutions
                        globally, including seamless payment gateways, <br>advanced financial tools, and versatile
                        API integrations.</p>
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
                                <h1 class="display-5 mb-4 text-white">Meet our company unless miss the opportunity
                                </h1>
                                <p class="mb-4 text-white ms-0">We offer aadhaar enabled payment system software,
                                    aeps b2b portal, b2b portal design services, money transfer software, b2b
                                    software with source code and pan card white label portal / b2b software.
                                </p>
                                <div class="row g-4">
                                    <div class="col-md-6 col-lg-6 col-xl-6">
                                        <div class="d-flex">
                                            <div><i class="fa fa-credit-card-alt fa-3x text-orange"></i></div>
                                            <div class="ms-4">
                                                <h4 class="text-white ms-0"
                                                    style="line-height: 26px;margin-bottom: 6px;">Advanced Payment
                                                    Gateways</h4>
                                                <p class="text-white ms-0">Experience efficient and secure
                                                    transactions with our robust payment processing solutions.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xl-6">
                                        <div class="d-flex">
                                            <div><i class="fa fa-check-square fa-3x text-orange"></i></div>
                                            <div class="ms-4">
                                                <h4 class="text-white ms-0"
                                                    style="line-height: 26px;margin-bottom: 6px;">Comprehensive API
                                                    Solutions</h4>
                                                <p class="text-white ms-0">Drive innovation with our versatile APIs
                                                    that seamlessly connect your business systems.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <p>Enhance your business operations with our advanced software solutions,
                                            including secure payment systems, customizable portals, and versatile
                                            APIs.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s"
                            style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInRight;">
                            <div class=" position-relative overflow-hidden">
                                <img src="{{asset('web/images/about-2.png')}}" class="img-fluid rounded w-100" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="sectionTwo">

            <div class="container-fluid service pb-5">
                <div class="container pb-3">
                    <div class="text-center mx-auto pb-5">
                        <h4 class="text-orange">Our Services</h4>
                        <h1 class="display-5 mb-4 text-white">Top Trusted B2B Solutions</h1>
                        <p class="mb-0 text-white">"Partner with the top software and fintech company to deliver
                            innovative, cutting-edge solutions to your clients."
                        </p>
                    </div>
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-4">
                            <div class="service-item">
                                <div class="service-img">
                                    <img src="{{asset('web/images/service-1.jpg')}}" class="img-fluid rounded-top w-100"
                                        alt="Image">
                                </div>
                                <div class="rounded-bottom p-2 mt-2">
                                    <a href="#" class="h4 d-inline-block mb-2 text-white">Mobile Recharges
                                    </a>
                                    <p class="mb-4 text-white">Easily recharge prepaid plans, data packs, or talk
                                        time. Enjoy exclusive discounts and secure transactions with just a few
                                        clicks.</p>
                                    <!-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> -->
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
                                    <a href="#" class="h4 d-inline-block mb-2 text-white">Digital Wallets
                                    </a>
                                    <p class="mb-4 text-white">Facilitate instant payments, money transfers, and
                                        bill payments with our digital wallet. Experience seamless transactions with
                                        top-notch encryption.</p>
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
                                    <a href="#" class="h4 d-inline-block mb-2 text-white">Online Bookings
                                    </a>
                                    <p class="mb-4 text-white">Streamline online bookings with our user-friendly
                                        platform. Browse, compare prices, and book effortlessly. Unlock endless
                                        options with <a href="https://digifintel.com/"
                                            style="color:#fff; font-weight: bold;" target="_blank">Digifintel</a>.
                                    </p>
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
                                    <a href="#" class="h4 d-inline-block mb-2 text-white">Financial
                                        Management </a>
                                    <p class="mb-4 text-white">Utilize expert software for accounting, invoicing,
                                        budgeting, and expense tracking. Build trust and enhance your brand—1
                                        t55contact us for great deals!</p>
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
                                    <a href="#" class="h4 d-inline-block mb-2 text-white">Fast UPI Payments
                                    </a>
                                    <p class="mb-4 text-white">Enable swift UPI payments with secure, hassle-free
                                        transactions. Experience smooth fund transfers through our intuitive
                                        interface today!
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
                                    <a href="#" class="h4 d-inline-block mb-2 text-white">Payment Gateways
                                    </a>
                                    <p class="mb-4 text-white">Discover smoother, faster, and secure transactions
                                        with our payment gateways. Redefine convenience and reliability for online
                                        payments—partner with us!</p>
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
                <div class="row g-5 pt-5">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
                        <div class="feature-img mt-3">
                            <img src="{{asset('web/images/b2b_features.png')}}" class="img-fluid w-100 h-100" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.1s"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInRight;">
                        <h4 class="text-orange">Products</h4>
                        <h1 class="display-5 mb-4 text-white">Unlock Your Business Potential with Our B2B Software
                            & Fintech Solutions</h1>
                        <p class="mb-4 text-white">Our tailored B2B software and fintech products are designed to
                            meet the unique needs of businesses of all sizes. From efficient payment gateways to
                            innovative API solutions, we provide the tools to optimize financial workflows, enhance
                            customer interactions, and elevate your industry presence.
                        </p>
                        <div class="row g-4">
                            <div class="col-12">
                                <p class="mb-4 text-white">Our solutions are more than just software—they're a
                                    catalyst for your business growth. Let's grow together. Connect with our project
                                    managers to explore how we can help you expand and innovate.
                                </p>
                            </div>

                        </div>
                        <!-- <div class="my-4">
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
                            <h2 class="pb-3 text-white text-center mb-3">B2B Fintech Solutions</h2>
                            <div class="row row-cols-1 row-cols-md-3 g-4">

                                <!-- Item -->
                                <div class="col">
                                    <div class="card h-100 border-0 shadow-sm p-md-2 p-lg-1">
                                        <div class="card-body d-flex align-items-center">
                                            <div class="bg-primary shadow-primary rounded-3 flex-shrink-0 p-3">
                                                <img src="{{asset('web/images/aeps.png')}}" />
                                            </div>
                                            <div class="ms-lg-3">
                                                <h3>AEPS Software</h3>
                                                <p>Secure real-time banking with our AEPS software.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Item -->
                                <div class="col">
                                    <div class="card h-100 border-0 shadow-sm p-md-2 p-lg-1">
                                        <div class="card-body d-flex align-items-center">
                                            <div class="bg-primary shadow-primary rounded-3 flex-shrink-0 p-3">
                                                <img src="{{asset('web/images/mobileRecharge.png')}}" />
                                            </div>
                                            <div class="ms-lg-3">
                                                <h3>Recharge Software</h3>
                                                <p>Effortlessly handle prepaid recharges.</p>
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
                                                <h3>BBPS Software</h3>
                                                <p>Streamline bill payments seamlessly.</p>
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
                                                <h3>DMT Software</h3>
                                                <p>Instant money transfers made easy.</p>
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
                                                <h3>UTI (Pancard) Software</h3>
                                                <p>EManage PAN card services effortlessly.</p>
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
                                                <h3>Travel Software</h3>
                                                <p>Simplify your travel bookings in one place.</p>
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