@extends('web.app')

@section('content')
    <div class="container px-4 py-5 section_1">
        <div class="overlay_div_gradient"></div>
        <div class="row flex-lg-row-reverse align-items-center g-5">
            <div class="col-10 col-sm-8 col-lg-6  animated wow fadeInDown">
                <img src="{{ asset('web/images/hero-1.png') }}" class="d-block mx-lg-auto img-fluid"
                    alt="Custom Software Development by PurnTech" width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-2 mb-3 text-white animated wow fadeInUp"><span>We</span> Design,
                    Builds Brand & Digital Project</h1>
                <p class="lead text-white">We are a leading web design and development company, dedicated to
                    providing businesses of all sizes with high-quality, custom-built websites that help them
                    succeed online. </p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <button type="button" class="btn btn-primary btn-lg px-4 me-md-2 GetAquotes"><a href="enquiry.html">Get
                            A Quote</a></button>
                    <!-- <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button> -->
                </div>
            </div>
        </div>
    </div>

    <div class="container section_2">
        <div class="left_1 animated wow fadeInUp">
            <h2>End-to-End <span>IT Solutions</span></h2>
            <ul>
                <li><!-- <strong>Web Development:</strong>  -->Crafting responsive and dynamic websites tailored to
                    your business needs.</li>
                <li><!-- <strong>Mobile App Development:</strong> --> Creating user-friendly and feature-rich mobile
                    applications for both Android and iOS platforms.</li>
                <li><!-- <strong>eCommerce Development:</strong>  -->Building robust and scalable eCommerce
                    solutions to enhance your online retail presence.</li>
                <li><!-- <strong>DevOps:</strong>  -->Implementing efficient DevOps practices to streamline your
                    development and operations processes.</li>
                <li><!-- <strong>Digital Marketing:</strong>  -->Leveraging the latest digital marketing strategies
                    to boost your online visibility and engagement.</li>
                <li><!-- Data Science:  -->Utilizing advanced data analytics to drive informed business decisions
                    and strategies.</li>
                <!-- <li>Partner with us to drive innovation and achieve your IT goals.</li> -->
            </ul>
        </div>
        <div class="right_1">
            <img src="{{ asset('web/images/svg/01.svg') }}" width="100%"
                alt="Custom Software Development by PurnTech" />
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="container marketing  section_3  animated fadeInLeft mb-5">
        <h2 class="animate__animated animate__bounce">IT Support and Services that <span>We Offer</span></h2>
        <p>Our IT and Allied Services are carefully curated to help brands attain a Digital Identity that customers
            and users are bound to love. Each of <br>our services are curated by a team of industry's best resources
            to help deliver results beyond expectations.</p>

        <!-- Three columns of text below the carousel -->
        <div class="row animated wow fadeInLeft">
            <div class="col-lg-4">
                <img src="{{ asset('web/images/svg/frontend.svg') }}" alt="Custom Software Development by PurnTech" />
                <h3>Frontend Development</h3>
            </div><!-- /.col-lg-4 -->

            <div class="col-lg-4">
                <img src="{{ asset('web/images/svg/web_app.svg') }}" alt="Custom Software Development by PurnTech" />
                <h3>Web Application Development</h3>
            </div><!-- /.col-lg-4 -->

            <div class="col-lg-4">
                <img src="{{ asset('web/images/svg/mob_app.svg') }}" alt="Custom Software Development by PurnTech" />
                <h3>Mobile App Development </h3>
            </div><!-- /.col-lg-4 -->

        </div><!-- /.row -->

        <div class="row">
            <div class="col-lg-4">
                <img src="{{ asset('web/images/svg/eccomerce_dev.svg') }}"
                    alt="Custom Software Development by PurnTech" />
                <h3>E-commerce Development</h3>
            </div><!-- /.col-lg-4 -->

            <div class="col-lg-4">
                <img src="{{ asset('web/images/svg/staff_aug.svg') }}" alt="Custom Software Development by PurnTech" />
                <h3>Staff Augmentation </h3>
            </div><!-- /.col-lg-4 -->

            <div class="col-lg-4">
                <img src="{{ asset('web/images/svg/data_science.svg') }}" alt="Custom Software Development by PurnTech" />
                <h3>Data Science</h3>
            </div><!-- /.col-lg-4 -->

        </div><!-- /.row -->
    </div>

    <!--<div class="album py-5 section_4">-->
    <!--<div class="container">-->
    <!--<h2>Our <span>Portfolio</span></h2>-->
    <!--  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4 animated wow fadeInUp">-->

    <!--    <div class="col">-->
    <!--      <div class="card shadow-sm">-->
    <!--        <img src="{{ asset('web/images/thumbnail02.jpg') }}" alt="Custom Software Development by PurnTech" />-->
    <!--        <div class="card-body">-->
    <!--          <p class="card-text">BharatEarns</p>-->
    <!--          <p class="para">We are committed to transparency, security, and customer satisfaction, ensuring that you receive the highest quality assistance at every step.</p>-->
    <!--          <div class="d-flex justify-content-between align-items-center">-->
    <!--            <div class="btn-group">-->
    <!--              <button type="button" class="btn btn-sm btn-outline-secondary"><a href="https://bharatearns.com/" target="_blank">Read more</a></button>-->
    <!--            </div>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--      </div>-->
    <!--    </div>-->
    <!--<div class="col">-->
    <!--  <div class="card shadow-sm">-->
    <!--    <img src="{{ asset('web/images/thumbnail03.jpg') }}" alt="Custom Software Development by PurnTech" />-->
    <!--    <div class="card-body">-->
    <!--      <p class="card-text">Evoluto Solutions</p>-->
    <!--      <p class="para"> Evoluto Solutions Pvt Ltd. is a custom software development company that provides API services to companies of all sizes around the globe.</p>-->
    <!--      <div class="d-flex justify-content-between align-items-center">-->
    <!--        <div class="btn-group">-->
    <!--          <button type="button" class="btn btn-sm btn-outline-secondary"><a href="https://evolutosolution.com/" target="_blank">Read more</a></button>-->
    <!--        </div>-->
    <!--      </div>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--</div>    -->

    <!--<div class="col">-->
    <!--  <div class="card shadow-sm">-->
    <!--    <img src="{{ asset('web/images/thumbnail04.jpg') }}" alt="Custom Software Development by PurnTech" />-->
    <!--    <div class="card-body">-->
    <!--      <p class="card-text">NetPaisa</p>-->
    <!--      <p class="para">NetPaisa is a well established Fintech Company which help people of rural & urban Indian to get all Banking Facility Digitally anywhere in India. </p>-->
    <!--      <div class="d-flex justify-content-between align-items-center">-->
    <!--        <div class="btn-group">-->
    <!--          <button type="button" class="btn btn-sm btn-outline-secondary"><a href="https://www.netpaisa.com/" target="_blank">Read more</a></button>-->
    <!--        </div>-->
    <!--      </div>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--</div>-->

    <!--<div class="col">-->
    <!--  <div class="card shadow-sm">-->
    <!--    <img src="{{ asset('web/images/thumbnail01.jpg') }}" alt="Custom Software Development by PurnTech" />-->
    <!--    <div class="card-body">-->
    <!--      <p class="card-text">Pixstory</p>-->
    <!--      <p class="para">Pixstory is a new social media platform committed to transparency, integrity, and decency in which users are held accountable to the truth.</p>-->
    <!--      <div class="d-flex justify-content-between align-items-center">-->
    <!--        <div class="btn-group">-->
    <!--          <button type="button" class="btn btn-sm btn-outline-secondary"><a href="https://pixstory.com/" target="_blank">Read more</a></button>-->
    <!--        </div>-->

    <!--      </div>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--</div>-->

    <!--    </div>-->
    <!--  </div>-->
    <!--</div>-->
@endsection
