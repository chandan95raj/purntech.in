@extends('web.app')

@section('content')
    <div class="container col-xxl-10 px-4 py-5 section_1">
        <div class="overlay_div_gradient"></div>
        <div class="row flex-lg-row-reverse align-items-center g-5 pt-4 pb-4">

            <div class="col-lg-12 text-center mb-4">
                <h1 class="display-5 fw-bold lh-2 mb-3 text-white">Website Manitenance <span>Services</span></h1>
                <p class="lead text-white about_text_gray">Maintaining a website can be overwhelming, especially if
                    you’re not a tech-savvy person. <br>That’s why we offer a range of services to make your life
                    easier.</p>

            </div>
        </div>
    </div>

    <div class="container dedicatedResource">
        <div class="dedicatedResource_lft">
            <h3><img src="{{asset('web/images/icons/points01.svg')}}" width="20"
                    alt="Custom Software Development by PurnTech">Why Choose Us for Your Website Maintenance
                Services</h3>
            <p>We prioritize excellence in website maintenance. With a dedicated team of experts, we offer proactive
                solutions to keep your website secure, updated, and performing optimally. <br></br>Our customized
                maintenance plans cater to your specific needs, ensuring reliable support and timely updates.
                <br><br>We emphasize transparent communication, keeping you informed throughout the process. Choose
                us for your website maintenance and benefit from our commitment to delivering exceptional service
                and enhancing your online presence effectively.</p>

            <!-- <h3><img src="{{asset('web/images/icons/points01.svg')}}" width="20">Your Reliable SEO and Digital Marketing Partner</h3>
            <p>We guarantee a comprehensive optimization strategy that propels your website to the top of search engine rankings. <br>With data-driven insights, innovative techniques, and a deep understanding of search engine algorithms, we keep you ahead of the competition. <br>Partner with us to achieve online excellence and witness your brand flourish in the digital realm.</p> -->
        </div>
        <div class="dedicatedResource_rght">
            <img src="{{asset('web/images/svg/website_maintnce01.svg')}}" width="550"
                alt="Custom Software Development by PurnTech" />
        </div>
    </div>

    <div class="container px-4 py-5 benfitsDedicatedR webSite_dev01" id="hanging-icons">
        <h2 class="pb-2">Comprehensive Website Maintenance Solutions</span></h2>
        <p class="text-center">Ensure your website operates flawlessly with our comprehensive maintenance solutions.</p>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
            <div class="col d-flex align-items-start">
                <div class="icon-square">
                    <img src="{{asset('web/images/icons/points02.svg')}}" width="20"
                        alt="Custom Software Development by PurnTech" />
                </div>
                <div>
                    <h3>&nbsp; Security Audits and Updates</h3>
                    <p>Regular audits and updates to fortify your website against security threats and
                        vulnerabilities.</p>

                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div class="icon-square">
                    <img src="{{asset('web/images/icons/points02.svg')}}" width="20"
                        alt="Custom Software Development by PurnTech" />
                </div>
                <div>
                    <h3>&nbsp; Responsive Design Maintenance</h3>
                    <p>Regular checks and adjustments to maintain responsive design across various devices for
                        optimal user experience.</p>

                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div class="icon-square">
                    <img src="{{asset('web/images/icons/points02.svg')}}" width="20"
                        alt="Custom Software Development by PurnTech" />
                </div>
                <div>
                    <h3>&nbsp; Content Management and Updates</h3>
                    <p>Continuous management and updates of website content to ensure relevance and engagement.</p>
                </div>
            </div>

            <div class="col d-flex align-items-start">
                <div class="icon-square">
                    <img src="{{asset('web/images/icons/points02.svg')}}" width="20"
                        alt="Custom Software Development by PurnTech" />
                </div>
                <div>
                    <h3>&nbsp; Performance Monitoring and Optimization</h3>
                    <p>Monitoring and optimizing website performance to maintain speed and reliability.</p>
                </div>
            </div>

            <div class="col d-flex align-items-start">
                <div class="icon-square">
                    <img src="{{asset('web/images/icons/points02.svg')}}" width="20"
                        alt="Custom Software Development by PurnTech" />
                </div>
                <div>
                    <h3>&nbsp; Backup and Restore</h3>
                    <p>Scheduled backups and reliable restoration processes to protect website data and content.</p>
                </div>
            </div>

            <div class="col d-flex align-items-start">
                <div class="icon-square">
                    <img src="{{asset('web/images/icons/points02.svg')}}" width="20"
                        alt="Custom Software Development by PurnTech" />
                </div>
                <div>
                    <h3>&nbsp; Technical Troubleshooting and Support</h3>
                    <p>Prompt technical support to resolve any website issues and ensure smooth operation.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container whyOurWebsite">
        <h2>Comprehensive <span>Website Maintenance Solutions</span></h2>
        <p>Empower your business growth with strategic SEO and digital marketing expertise.</p>
        <div class="lft01">
            <ul>
                <li>
                    <h3>Expert Team</h3>
                    <p>Our dedicated team of website maintenance specialists brings extensive experience and
                        expertise to ensure your website operates at its best.</p>
                </li>
                <li>
                    <h3>Tailored Solutions </h3>
                    <p>We offer customized maintenance plans to meet the unique needs of your business, whether
                        startup or established enterprise.</p>
                </li>
            </ul>
        </div>
        <div class="middle01">
            <img src="{{asset('web/images/svg/weSiteMaintenance01.svg')}}" width="300"
                alt="Custom Software Development by PurnTech" />
        </div>
        <div class="right01">
            <ul>
                <li>
                    <h3>Proactive Monitoring</h3>
                    <p>We employ proactive monitoring techniques to identify and resolve potential issues before
                        they impact your website's performance.</p>
                </li>
                <li>
                    <h3>Timely Updates</h3>
                    <p>Benefit from timely updates and optimizations that keep your website secure, fast, and
                        aligned with the latest industry standards.</p>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
@endsection