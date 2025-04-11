
@extends('web.app')

@section('content')
    <div class="container col-xxl-10 px-4 py-5 section_1">
        <div class="overlay_div_gradient"></div>
        <div class="row flex-lg-row-reverse align-items-center g-5 pt-4 pb-4">

            <div class="col-lg-12 text-center mb-4">
                <h1 class="display-5 fw-bold lh-2 mb-3 text-white">Payout Payment <span>Software</span></h1>
                <p class="lead text-white about_text_gray">Our advanced Payout Payment Software is designed to make
                    disbursements and payouts <br>as effortless as receiving payments</p>
            </div>
        </div>
    </div><!-- container -->

    <section id="sectionOne" class="effortlessly_sec">
        <div class="container-fluid about py-5">
            <div class="container dedicatedResource py-5 payout_firstSec">
                <div class="row g-5 align-items-center">
                    <div class="col-xl-7 wow fadeInLeft" data-wow-delay="0.2s"
                        style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
                        <div>
                            <!-- <h4 class="text-primary">About Us</h4> -->
                            <h1 class="display-5 mb-4 text-white" style="font-size: 36px;font-weight: 500;">
                                Effortlessly Manage <span>Global Payouts</span></h1>
                            <p class="mb-4 text-white ms-0">Effortlessly manage global payouts with our secure,
                                automated software, offering instant payments and multi-currency support. Simplify
                                your disbursements and scale your business with ease.
                            </p>
                            <div class="row g-4">
                                <div class="col-md-12 col-lg-12 col-xl-12">
                                    <div class="d-flex">
                                        <div><i class="fa fa-credit-card-alt fa-3x text-orange"></i></div>
                                        <div class="ms-4">
                                            <h4 class="text-white ms-0"
                                                style="line-height: 26px;margin-bottom: 6px;">Streamline Global
                                                Payouts with Ease</h4>
                                            <p class="ms-0">EEffortlessly handle global payouts with our
                                                automated software, designed for secure, instant payments across
                                                multiple currencies. Simplify disbursements and focus on growing
                                                your business.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-12 col-xl-12">
                                    <div class="d-flex">
                                        <div><i class="fa fa-check-square fa-3x text-orange"></i></div>
                                        <div class="ms-4">
                                            <h4 class="text-white ms-0"
                                                style="line-height: 26px;margin-bottom: 6px;">Secure, Automated
                                                Payments Worldwide</h4>
                                            <p class="ms-0">Scale your business confidently with our reliable
                                                payout solution, offering seamless, real-time transactions. Manage
                                                disbursements efficiently and stay ahead in the global market.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <p>Enhance your business operations with our advanced software solutions,
                                        including secure payment systems, customizable portals, and versatile APIs.
                                    </p>
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


    <section id="sectionTwo" class="m-5">

        <!-- Section Title -->
        <div class="container section-title">
            <h2>Services</h2>
            <p>What we do offer</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item  position-relative">
                        <div class="icon">
                            <i class="bi bi-cash-stack" style="color: #0dcaf0;"></i>
                        </div>
                        <a href="{{url('/services')}}" class="stretched-link">
                            <h3>Seamless Client Onboarding</h3>
                        </a>
                        <p>Simplify client onboarding with quick self-registration via email or phone and flexible
                            document uploads. Automated KYC checks integrate trusted vendors, while manual reviews
                            can be handled easily through the back-office interface. With two-factor authentication
                            (2FA), ensure secure, efficient onboarding from start to finish.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-calendar4-week" style="color: #fd7e14;"></i>
                        </div>
                        <a href="{{url('/services')}}" class="stretched-link">
                            <h3>Multi-Currency and Digital Asset Accounts</h3>
                        </a>
                        <p>Effortlessly manage accounts in any currency or digital asset, including crypto, points,
                            and bonuses. Leverage an integrated ledger for accurate tracking, issue cards, and
                            create IBANs through pre-integrated vendors, with ACH support coming soon. Stay ahead
                            with a solution built for the future of finance.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-chat-text" style="color: #20c997;"></i>
                        </div>
                        <a href="{{url('/services')}}" class="stretched-link">
                            <h3>Complete Transaction Solutions</h3>
                        </a>
                        <p>Seamlessly manage top-ups and withdrawals, perform payment gateway operations, and handle
                            in-system transfers. Enjoy flexible currency exchanges, both within the system and
                            externally via integrated vendors, and generate payment links for ease of transactions.
                        </p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-credit-card-2-front" style="color: #df1529;"></i>
                        </div>
                        <a href="{{url('/services')}}" class="stretched-link">
                            <h3>Robust AML and Anti-Fraud Measures</h3>
                        </a>
                        <p>
                            Quickly identify and address suspicious transactions with our advanced monitoring tools.
                            Securely obtain client confirmations to prevent fraud and ensure AML compliance with
                            proof of income. Manage account security by freezing or unfreezing accounts as needed,
                            and efficiently close cases to maintain integrity.
                        </p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-globe" style="color: #6610f2;"></i>
                        </div>
                        <a href="{{url('/services')}}" class="stretched-link">
                            <h3>Unified Customer Support</h3>
                        </a>
                        <p>Access all customer details and activities in one centralized location. Seamlessly
                            communicate with clients, create notes, and manage chats through our integrated
                            messaging service. Maintain comprehensive records for future reference and ensure
                            efficient and personalized support.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-clock" style="color: #f3268c;"></i>
                        </div>
                        <a href="{{url('/services')}}" class="stretched-link">
                            <h3>Detailed User Action History</h3>
                        </a>
                        <p>Maintain a comprehensive log of system activities for both clients and team members.
                            Track full details including logins, sessions, and actions performed, providing valuable
                            insights for investigation and ensuring transparency and accountability.</p>
                    </div>
                </div><!-- End Service Item -->

            </div>

        </div>

    </section>

    <section id="sectionThree" class="alt-features section">

        <h2>Maximize Your <span>Profit Potential</span></h2>
        <p>Optimize your revenue with flexible transaction fees and limit configurations tailored to your needs.</p>

        <div class="container">

            <div class="row gy-5">

                <div class="col-xl-7 d-flex order-2 order-xl-1 aos-init aos-animate" data-aos="fade-up"
                    data-aos-delay="200">

                    <div class="row align-self-center gy-5 leftContentSec">

                        <div class="col-md-6 icon-box">
                            <i class="bi bi-award"></i>
                            <div>
                                <h4>Custom Pricing Options</h4>
                                <p>Flexibly manage deposit and payment fees separately from card and wire transfer
                                    costs to tailor pricing for optimal financial efficiency.</p>
                            </div>
                        </div><!-- End Feature Item -->

                        <div class="col-md-6 icon-box">
                            <i class="bi bi-card-checklist"></i>
                            <div>
                                <h4>Flexible Tariffs</h4>
                                <p>Easily adjust pricing for different customer segments and business agreements
                                    with our adaptable tariff system.</p>
                            </div>
                        </div><!-- End Feature Item -->

                        <div class="col-md-6 icon-box">
                            <i class="bi bi-dribbble"></i>
                            <div>
                                <h4>Money Flow Limits</h4>
                                <p>Set and manage turnover and transaction limits based on risk to control financial
                                    exposure and maintain stability.</p>
                            </div>
                        </div><!-- End Feature Item -->

                        <div class="col-md-6 icon-box">
                            <i class="bi bi-filter-circle"></i>
                            <div>
                                <h4>Secure Transactions</h4>
                                <p>Ensure transaction security with advanced measures to protect against fraud and
                                    unauthorized access.</p>
                            </div>
                        </div><!-- End Feature Item -->

                        <div class="col-md-6 icon-box">
                            <i class="bi bi-lightning-charge"></i>
                            <div>
                                <h4>End-to-End Encryption</h4>
                                <p>Keep your data safe with robust encryption that guards all sensitive information
                                    from unauthorized access.</p>
                            </div>
                        </div><!-- End Feature Item -->

                        <div class="col-md-6 icon-box">
                            <i class="bi bi-patch-check"></i>
                            <div>
                                <h4>Instant Cashout</h4>
                                <p>Quickly convert balances to cash with real-time cashout, enhancing your liquidity
                                    and streamlining cash flow.</p>
                            </div>
                        </div><!-- End Feature Item -->

                    </div>

                </div>

                <div class="col-xl-5 d-flex align-items-center order-1 order-xl-2 aos-init aos-animate"
                    data-aos="fade-up" data-aos-delay="100">
                    <img src="{{asset('/web/images/alt-features.png')}}"
                        class="img-fluid" alt="">
                </div>

            </div>

        </div>

    </section>

    <section id="sectionFour">
        <div class="container">
            <h1><span>Get</span> Started Today!</h1>
            <p>Ready to revolutionize the way you manage payouts? Contact us for a demo or a customized solution
                that fits your <br>business needs. Let us help you take the hassle out of payouts and make your
                payment operations <br>smooth, secure, and scalable.</p>
            <a href="{{url('/enquiry')}}">Read More</a>
        </div>
    </section>
@endsection