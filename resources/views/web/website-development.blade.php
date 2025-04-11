@extends('web.app')

@section('content')
    <div class="container col-xxl-10 px-4 py-5 section_1">
        <div class="overlay_div_gradient"></div>
        <div class="row flex-lg-row-reverse align-items-center g-5 pt-4 pb-4">

            <div class="col-lg-12 text-center mb-4">
                <h1 class="display-5 fw-bold lh-2 mb-3 text-white">Website Development <span>Services</span></h1>
                <p class="lead text-white about_text_gray">Elevate your business with a stunning website and
                    achieve exceptional growth through our quality, <br>affordable web development services.</p>

            </div>
        </div>
    </div>

    <div class="container dedicatedResource">
        <div class="dedicatedResource_lft">
            <h3><img src="{{asset('web/images/icons/points01.svg')}}" width="20"
                    alt="Custom Software Development by PurnTech">Website Development Services That Deliver
                Results</h3>
            <p>Our experienced website developers create dynamic, user-friendly, and engaging websites to elevate
                your brand. We offer quality website development for businesses of all sizes, helping you gain more
                clients, increase sales, and achieve exponential growth.</p>

            <h3><img src="{{asset('web/images/icons/points01.svg')}}" width="20"
                    alt="Custom Software Development by PurnTech">Achieve Remarkable Business Growth</h3>
            <p>Our experts enhance your business's credibility and reputation with professional, engaging websites.
                Establish trust and create an impressive online presence with our top-notch website development
                services.</p>
        </div>
        <div class="dedicatedResource_rght">
            <img src="{{asset('web/images/svg/dedicated_resources.svg')}}" alt="Custom Software Development by PurnTech" />
        </div>
    </div>

    <div class="container px-4 py-5 benfitsDedicatedR webSite_dev01" id="hanging-icons">
        <h2 class="pb-2">Partner with Leading <span>Website Development Services</span></h2>
        <p class="text-center">Investing in a website is a smart choice for building a strong online presence. Connect with our experts
            to get engaging websites today.</p>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
            <div class="col d-flex align-items-start">
                <div class="icon-square">
                    <img src="{{asset('web/images/icons/points02.svg')}}" width="20"
                        alt="Custom Software Development by PurnTech" />
                </div>
                <div>
                    <h3>&nbsp; Enjoy Free Domain and Hosting</h3>
                    <p>Get your website online with our complimentary domain and hosting services.</p>

                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div class="icon-square">
                    <img src="{{asset('web/images/icons/points02.svg')}}" width="20"
                        alt="Custom Software Development by PurnTech" />
                </div>
                <div>
                    <h3>&nbsp; One Year of Free Maintenance</h3>
                    <p>Experience worry-free website upkeep with one year of free maintenance.</p>

                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div class="icon-square">
                    <img src="{{asset('web/images/icons/points02.svg')}}" width="20"
                        alt="Custom Software Development by PurnTech" />
                </div>
                <div>
                    <h3>&nbsp; Get SSL-Secured Websites</h3>
                    <p>Protect your site and build trust with our SSL-secured websites.</p>
                </div>
            </div>

            <div class="col d-flex align-items-start">
                <div class="icon-square">
                    <img src="{{asset('web/images/icons/points02.svg')}}" width="20"
                        alt="Custom Software Development by PurnTech" />
                </div>
                <div>
                    <h3>&nbsp; Integrate Your Social Media Platforms</h3>
                    <p>Seamlessly connect and manage all your social media accounts.</p>
                </div>
            </div>

            <div class="col d-flex align-items-start">
                <div class="icon-square">
                    <img src="{{asset('web/images/icons/points02.svg')}}" width="20"
                        alt="Custom Software Development by PurnTech" />
                </div>
                <div>
                    <h3>&nbsp; Avail of Premium Website Designs</h3>
                    <p>Stand out with our sophisticated and unique premium website designs.</p>
                </div>
            </div>

            <div class="col d-flex align-items-start">
                <div class="icon-square">
                    <img src="{{asset('web/images/icons/points02.svg')}}" width="20"
                        alt="Custom Software Development by PurnTech" />
                </div>
                <div>
                    <h3>&nbsp; Responsive and User-Friendly Website Design</h3>
                    <p>Engage your audience with a responsive and user-friendly website design.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container whyOurWebsite">
        <h2>Why Choose Our Website Development Services?</span></h2>
        <p>With years of expertise and experience, we empower your digital presence on a global scale.</p>
        <div class="lft01">
            <ul>
                <li>
                    <h3>Affordable Pricing & Packages</h3>
                    <p>Our competitive pricing and superior quality services attract both local and international
                        clients.</p>
                </li>
                <li>
                    <h3>Client-Centric Approach</h3>
                    <p>We prioritize our clients, building long-term relationships based on trust and satisfaction.
                    </p>
                </li>
            </ul>
        </div>
        <div class="middle01">
            <img src="{{asset('web/images/svg/mobile_appDev_middle.svg')}}" alt="Custom Software Development by PurnTech" />
        </div>
        <div class="right01">
            <ul>
                <li>
                    <h3>Multitech Expertise</h3>
                    <p>Our proficiency in various technologies allows us to deliver tailored website solutions.</p>
                </li>
                <li>
                    <h3>Maintenance & Support</h3>
                    <p>We provide ongoing maintenance and support to ensure your website remains secure, functional,
                        and up-to-date.</p>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
@endsection