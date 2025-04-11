@extends('web.app')

@section('content')
    <div class="container col-xxl-10 px-4 py-5 section_1">
        <div class="overlay_div_gradient"></div>
        <div class="row flex-lg-row-reverse align-items-center g-5 pt-4 pb-4">

            <div class="col-lg-12 text-center mb-4">
                <h1 class="display-5 fw-bold lh-2 mb-3 text-white">App Development <span>Services</span></h1>
                <p class="lead text-white about_text_gray">Elevate your business with a stunning website and
                    achieve exceptional growth through our quality, <br>affordable web development services.</p>

            </div>
        </div>
    </div>

    <div class="container dedicatedResource">
        <div class="dedicatedResource_lft">
            <h3><img src="{{asset('web/images/icons/points01.svg')}}" width="20"
                    alt="Custom Software Development by PurnTech" />Get Exceptional Mobile App Development
                Solutions</h3>
            <h4>Create Seamless Software Applications</h4>
            <p>Craft seamless software applications optimized for smartphones and tablets to enhance customer value
                and elevate your brand presence. <br>Our mobile app development services ensure your continued
                relevance and competitiveness in the market.</p>

            <h3><img src="{{asset('web/images/icons/points01.svg')}}" width="20"
                    alt="Custom Software Development by PurnTech" />Build Comprehensive Mobile Apps for Today's
                Users</h3>
            <h4>Leveraging Cutting-Edge Technologies</h4>
            <p>We utilize modern technologies and tools to develop highly functional apps that meet the unique needs
                of your business. <br>Each app is designed with a distinct value proposition and tailored
                functionalities, ensuring it aligns perfectly with your specific requirements.</p>
        </div>
        <div class="dedicatedResource_rght">
            <img src="{{asset('web/images/svg/mobile_app01.svg')}}" alt="Custom Software Development by PurnTech" />
        </div>
    </div>

    <div class="container px-4 py-5 benfitsDedicatedR webSite_dev01" id="hanging-icons">
        <h2 class="pb-2">Our High-End Mobile <span> App Development Services</span></h2>
        <p class="text-center">Our detailed developmental process and expertise in creating a wide range of mobile apps suit businesses
            of every size and scale.</p>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
            <div class="col d-flex align-items-start">
                <div class="icon-square">
                    <img src="{{asset('web/images/icons/points02.svg')}}" width="20"
                        alt="Custom Software Development by PurnTech" />
                </div>
                <div>
                    <h3>&nbsp; Native Mobile App Development</h3>
                    <p>We create high-performance native apps for iOS and Android using platform-specific
                        technologies.</p>

                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div class="icon-square">
                    <img src="{{asset('web/images/icons/points02.svg')}}" width="20"
                        alt="Custom Software Development by PurnTech" />
                </div>
                <div>
                    <h3>&nbsp; Customer & Behavioral Insights</h3>
                    <p>We gather and analyze data to provide valuable customer and behavioral insights for informed
                        decision-making.</p>

                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div class="icon-square">
                    <img src="{{asset('web/images/icons/points02.svg')}}" width="20"
                        alt="Custom Software Development by PurnTech" />
                </div>
                <div>
                    <h3>&nbsp; Cross-Platform App Development</h3>
                    <p>We develop versatile cross-platform apps with frameworks like React Native and Flutter for
                        both iOS and Android.</p>
                </div>
            </div>

            <div class="col d-flex align-items-start">
                <div class="icon-square">
                    <img src="{{asset('web/images/icons/points02.svg')}}" width="20"
                        alt="Custom Software Development by PurnTech" />
                </div>
                <div>
                    <h3>&nbsp; QA Advisory and Tech Suggestions</h3>
                    <p>We offer comprehensive QA advisory and tech suggestions to ensure high-quality, secure, and
                        efficient applications.</p>
                </div>
            </div>

            <div class="col d-flex align-items-start">
                <div class="icon-square">
                    <img src="{{asset('web/images/icons/points02.svg')}}" width="20"
                        alt="Custom Software Development by PurnTech" />
                </div>
                <div>
                    <h3>&nbsp; Ongoing Maintenance & Support</h3>
                    <p>We provide ongoing maintenance and support to keep your app updated, secure, and reliable.
                    </p>
                </div>
            </div>

            <div class="col d-flex align-items-start">
                <div class="icon-square">
                    <img src="{{asset('web/images/icons/points02.svg')}}" width="20"
                        alt="Custom Software Development by PurnTech" />
                </div>
                <div>
                    <h3>&nbsp; UI/UX Specialists, and Designers</h3>
                    <p>Our in-house experts deliver visually appealing and user-friendly interfaces, ensuring a
                        seamless user experience.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container whyOurWebsite">
        <h2>Deliver Value to Customers with Our <span>Mobile App Development Services</span></h2>
        <p>Experience the advantages of owning a mobile app, outpace your competitors, and define your brand with
            elegance.</p>
        <div class="lft01">
            <ul>
                <li>
                    <h3>Enhance Distribution</h3>
                    <p>Cater to billions of people who purchase goods online. We help you create mobile applications
                        to sell with ease and efficiency.</p>
                </li>
                <li>
                    <h3>Increase Brand Exposure</h3>
                    <p>People utilize 90% of their online time on apps. It’s time to target where your customers are
                        already available for greater sales.</p>
                </li>
            </ul>
        </div>
        <div class="middle01">
            <img src="{{asset('web/images/svg/mobile_appDev_middle.svg')}}" alt="Custom Software Development by PurnTech" />
        </div>
        <div class="right01">
            <ul>
                <li>
                    <h3>Built Engagement & Trust</h3>
                    <p>Efficiently send relevant business and marketing messages and utilize push notifications to
                        enhance retention via reminders.</p>
                </li>
                <li>
                    <h3>Optimize Processes</h3>
                    <p>Collect relevant data to optimize business operations and improve efficiency and
                        profitability. Call us for a free quote now.</p>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
@endsection