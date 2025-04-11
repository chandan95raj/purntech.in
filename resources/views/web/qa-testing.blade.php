@extends('web.app')

@section('content')
    <div class="container col-xxl-10 px-4 py-5 section_1">
        <div class="overlay_div_gradient"></div>
        <div class="row flex-lg-row-reverse align-items-center g-5 pt-4 pb-4">

            <div class="col-lg-12 text-center mb-4">
                <h1 class="display-5 fw-bold lh-2 mb-3 text-white">Q/A Testing <span>Services</span></h1>
                <p class="lead text-white about_text_gray">Our developers undergo rigorous testing and verification
                    processes to ensure the <br>highest quality of software products and services before deployment.
                </p>

            </div>
        </div>
    </div>

    <div class="container dedicatedResource">
        <div class="dedicatedResource_lft">
            <h3><img src="{{asset('web/images/icons/points01.svg')}}" width="20"
                    alt="Custom Software Development by PurnTech" />Explore the Power of Perfection with Our QA
                Testing Services</h3>
            <p>Quality assurance is the cornerstone of success. At our QA Testing Services, every code line,
                functionality, and user experience is meticulously examined and refined. <br>Our robust
                methodologies ensure bug-free, glitch-free software, empowering you to deliver exceptional products
                in the ever-evolving tech landscape.</p>

            <h3><img src="{{asset('web/images/icons/points01.svg')}}" width="20"
                    alt="Custom Software Development by PurnTech" />Ensure Top Quality with Our QA Testing</h3>
            <p>Our team of QA experts delves into every layer of your applications to ensure they are not just
                functional but exceptional. From detailed code inspections to comprehensive compatibility checks, we
                strive for excellence. <br>Elevate your creations with our QA Testing Services and turn your digital
                dreams into flawless reality. It's time to redefine perfection, together.</p>
        </div>
        <div class="dedicatedResource_rght">
            <img src="{{asset('web/images/qaTestng.png')}}" width="550" alt="Custom Software Development by PurnTech" />
        </div>
    </div>

    <div class="container px-4 py-5 benfitsDedicatedR webSite_dev01" id="hanging-icons">
        <h2 class="pb-2">We Undergo a Wide Range of QA Testing</span></h2>
        <p class="text-center">We proactively identify and prevent potential issues, ensuring end-user satisfaction and that your
            products meet all your requirements.</p>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
            <div class="col d-flex align-items-start">
                <div class="icon-square">
                    <img src="{{asset('web/images/icons/points02.svg')}}" width="20"
                        alt="Custom Software Development by PurnTech" />
                </div>
                <div>
                    <h3>&nbsp; Integration Testing</h3>
                    <p>We ensure seamless interaction between system components through comprehensive integration
                        testing.</p>

                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div class="icon-square">
                    <img src="{{asset('web/images/icons/points02.svg')}}" width="20"
                        alt="Custom Software Development by PurnTech" />
                </div>
                <div>
                    <h3>&nbsp; Regression Testing</h3>
                    <p>Our regression testing verifies that new updates do not affect the existing functionality of
                        your software.</p>

                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div class="icon-square">
                    <img src="{{asset('web/images/icons/points02.svg')}}" width="20"
                        alt="Custom Software Development by PurnTech" />
                </div>
                <div>
                    <h3>&nbsp; Unit Testing</h3>
                    <p>We conduct detailed unit testing to validate the functionality of individual components.</p>
                </div>
            </div>

            <div class="col d-flex align-items-start">
                <div class="icon-square">
                    <img src="{{asset('web/images/icons/points02.svg')}}" width="20"
                        alt="Custom Software Development by PurnTech" />
                </div>
                <div>
                    <h3>&nbsp; Appearance Testing</h3>
                    <p>Our appearance testing guarantees a visually consistent and appealing user interface across
                        all platforms.</p>
                </div>
            </div>

            <div class="col d-flex align-items-start">
                <div class="icon-square">
                    <img src="{{asset('web/images/icons/points02.svg')}}" width="20"
                        alt="Custom Software Development by PurnTech" />
                </div>
                <div>
                    <h3>&nbsp; Performance Testing</h3>
                    <p>Our performance testing evaluates your application's speed, responsiveness, and stability
                        under various conditions.</p>
                </div>
            </div>

            <div class="col d-flex align-items-start">
                <div class="icon-square">
                    <img src="{{asset('web/images/icons/points02.svg')}}" width="20"
                        alt="Custom Software Development by PurnTech" />
                </div>
                <div>
                    <h3>&nbsp; Compatibility Testing</h3>
                    <p>We verify that your application functions correctly across different devices, browsers, and
                        operating systems.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container whyOurWebsite">
        <h2>Why is QA Testing Important?</h2>
        <p>QA Testing services are the unsung heroes, ensuring your creations are not just functional but
            exceptional.</p>
        <div class="lft01">
            <ul>
                <li>
                    <h3>Enhanced Software Quality</h3>
                    <p>Through rigorous testing, QA identifies and eradicates bugs, glitches, and errors before they
                        reach end-users, ensuring seamless software functioning and boosting your brand's reputation
                        for reliability and quality.</p>
                </li>
                <li>
                    <h3>Cost Efficiency </h3>
                    <p>By detecting and rectifying issues early in the development cycle, QA Testing prevents costly
                        fixes and updates post-launch, safeguarding against the financial ramifications of software
                        failures.</p>
                </li>
            </ul>
        </div>
        <div class="middle01">
            <img src="{{asset('web/images/svg/qa_tsting01.svg')}}" width="300"
                alt="Custom Software Development by PurnTech" />
        </div>
        <div class="right01">
            <ul>
                <li>
                    <h3>Faster Time-to-Market</h3>
                    <p>Early issue identification and resolution prevent last-minute crises and delays, while
                        thorough testing ensures software compatibility across various platforms and devices,
                        allowing confident, timely launches.</p>
                </li>
                <li>
                    <h3>Improved User Experience</h3>
                    <p>By ensuring software is bug-free and operates smoothly, QA Testing enhances user satisfaction
                        and encourages positive feedback and loyalty. This ultimately leads to increased user
                        retention and brand advocacy.</p>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
@endsection