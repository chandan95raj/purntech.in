@extends('web.app')

@section('content')
    <div class="container col-xxl-10 px-4 py-5 section_1">
        <div class="overlay_div_gradient"></div>
        <div class="row flex-lg-row-reverse align-items-center g-5 pt-4 pb-4">
            <div class="col-lg-12 text-center mb-4">
                <h1 class="display-5 fw-bold lh-2 mb-3 text-white">Our <span>Services</span></h1>
                <p class="lead text-white about_text_gray">Talk to us about your requirements, be it consulting or
                    development, <br>We would be happy to help you</p>
            </div>
        </div>
    </div>

    <div class="container servicesSection1">
        <div class="row featurette pb-5">
            <div class="col-md-6">
                <h2 class="featurette-heading fw-normal lh-1">Frontend Development</h2>
                <h4>Bringing Your Vision to Life</h4>
                <p class="lead">Our Frontend Development services are tailored to create visually captivating and
                    highly interactive user interfaces. We place a strong emphasis on user experience, ensuring that
                    your website is not only aesthetically pleasing but also intuitive and user-friendly.
                    <br> Utilizing the latest technologies such as HTML5, CSS3, and JavaScript frameworks like
                    React, Angular, and Vue.js, we develop responsive designs that perform flawlessly across all
                    devices.
                </p>
            </div>
            <div class="col-md-6 text-end">
                <img src="{{asset('web/images/fontend_dev.png')}}" width="490" alt="Custom Software Development by PurnTech" />
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-6 order-md-2">
                <h2 class="featurette-heading fw-normal lh-1">Web Application Development</h2>
                <h4>Building Robust and Scalable Web Solutions</h4>
                <p class="lead">Our Web Application Development services are focused on creating dynamic,
                    scalable, and secure web applications customized to your business requirements.

                    We excel in full-stack development, utilizing advanced frameworks such as Node.js, Django, Ruby
                    on Rails, and Laravel. <br>Whether you need a sophisticated e-commerce platform, a content
                    management system, or a custom enterprise application, our team delivers solutions that enhance
                    operational efficiency and user engagement. </p>
            </div>
            <div class="col-md-6 order-md-1 mt-5">
                <img src="{{asset('web/images/svg/webApplicationDev.svg')}}" alt="Custom Software Development by PurnTech" />
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette pt-5 pb-5">
            <div class="col-md-6">
                <h2 class="featurette-heading fw-normal lh-1">Mobile Application Development</h2>
                <h4>Innovative Mobile Experiences</h4>
                <p class="lead">In an increasingly mobile-centric world, having a robust mobile presence is
                    essential. Our Mobile Application Development services encompass the entire app development
                    lifecycle, from ideation to deployment and beyond. We specialize in creating both native and
                    cross-platform mobile applications using technologies such as Swift for iOS, Kotlin for Android,
                    and frameworks like Flutter and React Native. Whether you’re looking to develop an app for iOS,
                    Android, or both, our team crafts high-performance, user-centric apps that fulfill your business
                    objectives.</p>
            </div>
            <div class="col-md-6 text-end">
                <img src="{{asset('web/images/svg/mobileApplocationDev.svg')}}" width="470"
                    alt="Custom Software Development by PurnTech" />
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-6 order-md-2">
                <h2 class="featurette-heading fw-normal lh-1">Digital Marketing</h2>
                <h4>Driving Growth with Data-Driven Strategies</h4>
                <p class="lead">Our Digital Marketing services are designed to amplify your brand’s presence and
                    drive targeted traffic to your website. We offer a full spectrum of digital marketing solutions
                    including Search Engine Optimization (SEO), Pay-Per-Click (PPC) advertising, social media
                    marketing, content marketing, and email marketing. Our approach is data-driven, using analytics
                    and insights to develop strategies that maximize your return on investment</p>
            </div>
            <div class="col-md-6 order-md-1 mt-5">
                <img src="{{asset('web/images/svg/digitalMarketing.svg')}}" width="460" alt="Custom Software Development by PurnTech" />
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-6">
                <h2 class="featurette-heading fw-normal lh-1">Website maintenance</h2>
                <h4>Keeping Your Website Running Smoothly</h4>
                <p class="lead">Our Website Maintenance services ensure that your website remains secure,
                    up-to-date, and performs optimally at all times. We handle everything from regular updates and
                    backups to security monitoring, performance optimization, and troubleshooting. Our proactive
                    approach to website maintenance helps prevent potential issues before they become problems,
                    ensuring that your site runs smoothly and efficiently. Our dedicated support team is always on
                    hand to address any issues promptly, minimizing downtime and ensuring a seamless user
                    experience.</p>
            </div>
            <div class="col-md-6">
                <img src="{{asset('web/images/svg/websiteMaintanance.svg')}}" alt="Custom Software Development by PurnTech" />
            </div>
        </div>

    </div>
@endsection