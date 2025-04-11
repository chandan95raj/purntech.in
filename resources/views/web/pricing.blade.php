@extends('web.app')

@section('content')
    <div class="container col-xxl-10 px-4 py-5 section_1">
        <div class="overlay_div_gradient"></div>
        <div class="row flex-lg-row-reverse align-items-center g-5 pt-4 pb-4">

            <div class="col-lg-12 text-center mb-4">
                <h1 class="display-5 fw-bold lh-2 mb-3 text-white">Transparent and Competitive <span>Pricing</span>
                </h1>
                <p class="lead text-white about_text_gray">Our services are designed to deliver exceptional value
                    without compromising on quality. With <br>transparent pricing models, you can easily choose the
                    services that fit your business needs and budget.</p>

            </div>
        </div>
    </div>

    <div class="container py-3 pricing_ngg">


        <main>
            <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">Website Design</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title"> ₹40,000 <small
                                    class="text-muted fw-light">Starting</small></h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>Custom website designs tailored to your brand</li>
                                <li>Responsive and mobile-friendly layouts</li>
                                <li>SEO-optimized structure for higher visibility</li>
                                <li>Unlimited revisions until you're satisfied</li>
                            </ul>
                            <a href="{{url('/enquiry')}}" class="w-100 btn btn-lg btn-outline-primary">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">Website Development</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">₹65,000<small class="text-muted fw-light">
                                    Starting</small></h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>Scalable and high-performing web solutions</li>



                                <li>CMS integrations (WordPress, Shopify, etc.)</li>
                                <li>E-commerce functionality for online stores</li>
                                <li>Advanced features and API integrations</li>
                            </ul>
                            <a class="w-100 btn btn-lg btn-outline-primary" href="{{url('/enquiry')}}">Get started</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm border-primary">
                        <div class="card-header py-3 text-white bg-primary border-primary">
                            <h4 class="my-0 fw-normal">App Development</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title"> ₹1,25,000<small
                                    class="text-muted fw-light"> Starting</small></h1>
                            <ul class="list-unstyled mt-3 mb-4">



                                <li>Cross-platform development (iOS & Android)</li>
                                <li>Sleek and intuitive user interface design</li>
                                <li>Backend integration with secure databases</li>
                                <li>Full lifecycle support from concept to deployment</li>
                            </ul>
                            <a class="w-100 btn btn-lg btn-outline-primary" href="{{url('/enquiry')}}">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>




        </main>


    </div>
@endsection