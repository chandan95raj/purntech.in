@extends('web.app')

@section('content')
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            text-align: center;
            font-family: Arial, sans-serif;
            border: none;
        }

        th {
            background-color: #0C0C0E;
            color: rgba(255, 255, 255, 0.8);
            padding: 10px;
            border: none;

        }

        td {
            border: 1px solid #ccc;
            padding: 10px;
            border: none;
        }

        tbody tr:nth-child(even) {
            background-color: #141415;
            border: none;
            color: rgba(255, 255, 255, 0.7);
            ;
        }

        tbody tr:nth-child(odd) {
            background-color: rgba(255, 255, 255, 0.2);
            color: rgba(255, 255, 255, 0.7);
            border: none;
        }

        tbody tr:last-child {
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }
    </style>

    <div class="container col-xxl-10 px-4 py-5 section_1">
        <div class="overlay_div_gradient"></div>
        <div class="row flex-lg-row-reverse align-items-center g-5 pt-4 pb-4">

            <div class="col-lg-12 text-center mb-4">
                <h1 class="display-5 fw-bold lh-2 mb-3 text-white">Dedicated <span>Resources</span></h1>
                <p class="lead text-white about_text_gray">"We provide expert resources who use rock-solid measures
                    <br>to protect your sensitive data."</p>

            </div>
        </div>
    </div>

    <div class="container dedicatedResource">
        <div class="dedicatedResource_lft">
            <h3><img src="{{asset('web/images/icons/points01.svg')}}" width="20"
                    alt="Custom Software Development by PurnTech" />Provide Resources for Every Project with
                Rock-Solid Secrecy</h3>
            <p>Our skilled dedicated resources deliver unparalleled excellence in software and digital marketing.
                Committed to relentless innovation, our professionals operate under unwavering confidentiality,
                ensuring your unique needs are met with tailor-made precision. Our expert team is ready to elevate
                your business to new heights.</p>

            <h3><img src="{{asset('web/images/icons/points01.svg')}}" width="20"
                    alt="Custom Software Development by PurnTech" /> Hire Quality Dedicated Resources for Digital
                Innovation</h3>
            <p>From cutting-edge software development to dynamic digital marketing strategies, experience a seamless
                blend of creativity, technology, and secrecy. Transform your aspirations into digital reality with
                our dedicated resources by your side – where excellence is not just a goal but a guarantee. Open the
                doors to success with our exceptional team.</p>
        </div>
        <div class="dedicatedResource_rght">
            <img src="{{asset('web/images/svg/dedicated_resources.svg')}}" alt="Custom Software Development by PurnTech" />
        </div>
    </div>

    <div class="container px-4 py-5 benfitsDedicatedR" id="hanging-icons">
        <h2 class="pb-2">The Benefits Of <span>Dedicated Resources</span></h2>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
            <div class="col d-flex align-items-start">
                <div class="icon-square">
                    <img src="{{asset('web/images/icons/points02.svg')}}" width="20"
                        alt="Custom Software Development by PurnTech" />
                </div>
                <div>
                    <h3>&nbsp; Personalized</h3>
                    <p>Personalized solutions align precisely with your business goals ensuring optimal outcomes.
                    </p>

                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div class="icon-square">
                    <img src="{{asset('web/images/icons/points02.svg')}}" width="20"
                        alt="Custom Software Development by PurnTech" />
                </div>
                <div>
                    <h3>&nbsp; Quality</h3>
                    <p>Benefits of quality talent without the overhead costs of permanent hiring, cost-effective
                        option for your projects.</p>

                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div class="icon-square">
                    <img src="{{asset('web/images/icons/points02.svg')}}" width="20"
                        alt="Custom Software Development by PurnTech" />
                </div>
                <div>
                    <h3>&nbsp; Specialized</h3>
                    <p>Team of specialized professionals whenever needed. Save your time and efforts in recruitment
                        and training.</p>
                </div>
            </div>

            <div class="col d-flex align-items-start">
                <div class="icon-square">
                    <img src="{{asset('web/images/icons/points02.svg')}}" width="20"
                        alt="Custom Software Development by PurnTech" />
                </div>
                <div>
                    <h3>&nbsp; Confidentiality </h3>
                    <p>With rock-solid secrecy, dedicated resources ensure the confidentiality of your sensitive
                        projects and proprietary information.</p>
                </div>
            </div>

            <div class="col d-flex align-items-start">
                <div class="icon-square">
                    <img src="{{asset('web/images/icons/points02.svg')}}" width="20"
                        alt="Custom Software Development by PurnTech" />
                </div>
                <div>
                    <h3>&nbsp; Efficiency</h3>
                    <p>Dedicated resources seamlessly integrate into your existing teams to foster collaboration and
                        enhance efficiency.</p>
                </div>
            </div>

            <div class="col d-flex align-items-start">
                <div class="icon-square">
                    <img src="{{asset('web/images/icons/points02.svg')}}" width="20"
                        alt="Custom Software Development by PurnTech" />
                </div>
                <div>
                    <h3>&nbsp; Business needs</h3>
                    <p>Scale your resources based on project demands, ensuring flexibility and adaptability to
                        changing business needs.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container whyOurWebsite">
        <h2>Efficiently Hire Our Dedicated Resources</h2>
        <p>Strategic decision-making enhances and optimizes your business requirements and activities.</p>
        <div class="lft01">
            <ul>
                <li>
                    <h3>Assessment and Consultation</h3>
                    <p>Detailed consultations help us identify the specific skill sets, expertise, and experience
                        you need to achieve your desired results. This ensures we match you with professionals who
                        can efficiently handle your unique challenges.</p>
                </li>
                <li>
                    <h3>Tailored Selection Process</h3>
                    <p>We rigorously select professionals from our experienced pool, evaluating their technical
                        skills, industry expertise, and track record to ensure they align seamlessly with your
                        project's requirements.</p>
                </li>
            </ul>
        </div>
        <div class="middle01">
            <img src="{{asset('web/images/svg/dedicated_resources01.svg')}}" alt="Custom Software Development by PurnTech" />
        </div>
        <div class="right01">
            <ul>
                <li>
                    <h3>Integration and Management</h3>
                    <p>Our dedicated resources seamlessly integrate with your team, working collaboratively to
                        achieve your objectives. We provide regular updates, progress reports, and maintain open
                        channels of communication.</p>
                </li>
                <li>
                    <h3>Ongoing Support and Dev</h3>
                    <p>We ensure ongoing support and professional development for our resources, keeping them
                        updated with industry trends and technologies. This commitment enables consistent delivery
                        of high-quality results for your projects.</p>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>


    <div class="container techPrices">
        <h2>Our Pricing for Dedicated Resource</h2>
        <div class="tech_pricing_table table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>Developers</th>
                        <th>Rate Chart (Per Hourly)</th>
                        <th>Full Time Resource<br>(160 Hrs/Month or 8 Hrs/Day)</th>
                        <th>Part Time Resource<br>(80 Hrs/Month or 4 Hrs/Day)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>WordPress</td>
                        <td>$09</td>
                        <td>$1350</td>
                        <td>$700</td>
                    </tr>
                    <tr>
                        <td>Ionic</td>
                        <td>$09</td>
                        <td>$1350</td>
                        <td>$700</td>
                    </tr>
                    <tr>
                        <td>Shopify</td>
                        <td>$10</td>
                        <td>$1450</td>
                        <td>$750</td>
                    </tr>
                    <tr>
                        <td>&Magento</td>
                        <td>$12</td>
                        <td>$1850</td>
                        <td>$950</td>
                    </tr>
                    <tr>
                        <td>Opencart</td>
                        <td>$09</td>
                        <td>$1350</td>
                        <td>$700</td>
                    </tr>
                    <tr>
                        <td>Drupal</td>
                        <td>$11</td>
                        <td>$1500</td>
                        <td>$750</td>
                    </tr>
                    <tr>
                        <td>PHP</td>
                        <td>$11</td>
                        <td>$1500</td>
                        <td>$750</td>
                    </tr>
                    <tr>
                        <td>Laravel</td>
                        <td>$12</td>
                        <td>$1600</td>
                        <td>$850</td>
                    </tr>
                    <tr>
                        <td>Codeigniter (CI)</td>
                        <td>$12</td>
                        <td>$1600</td>
                        <td>$850</td>
                    </tr>
                    <tr>
                        <td>Node JS</td>
                        <td>$14</td>
                        <td>$2050</td>
                        <td>$1050</td>
                    </tr>
                    <tr>
                        <td>Angular</td>
                        <td>$14</td>
                        <td>$2050</td>
                        <td>$1050</td>
                    </tr>
                    <tr>
                        <td>React JS</td>
                        <td>$12</td>
                        <td>$1600</td>
                        <td>$850</td>
                    </tr>
                    <tr>
                        <td>iOS Native (Swift)</td>
                        <td>$13</td>
                        <td>$1850</td>
                        <td>$950</td>
                    </tr>
                    <tr>
                        <td>Android Native (Java/Kotlin)</td>
                        <td>$13</td>
                        <td>$1850</td>
                        <td>$950</td>
                    </tr>
                    <!-- Add additional rows as needed -->
                </tbody>
            </table>
        </div>
    </div>

    <div class="container letsTalk">
        <div class="map01">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.514660588234!2d77.22403837409485!3d28.644304783548506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd23f80465c5%3A0xe62b709790c68d0b!2sAsaf%20Ali%20Rd%2C%20Kamla%20Market%2C%20Ajmeri%20Gate%2C%20Delhi!5e0!3m2!1sen!2sin!4v1706517062426!5m2!1sen!2sin"
                width="500" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="contactForm">
            <h3>Let's <span>Talk</span></h3>
            <form>
                <div class="formRow1">
                    <input type="text" class="" name="" placeholder="Enter Your Name">
                </div>
                <div class="formRow2">
                    <select class="form-select form-select-lg" aria-label=".form-select-lg example">
                        <option>+91 India</option>
                        <option>+354 Iceland</option>
                        <option>+36 Hungary</option>
                        <option>+852 Hong Kong</option>
                        <option>+62 Indonesia</option>
                    </select>
                    <input type="text" class="" name="" placeholder="Enter Your Phone no.">
                </div>
                <div class="formRow3">
                    <input type="text" class="" name="" placeholder="Email">
                    <select class="form-select form-select-lg" aria-label=".form-select-lg example">
                        <option>Web Design & Development</option>
                        <option>App Development</option>
                        <option>Digital Marketing</option>
                        <option>Branding</option>
                        <option>Graphic Design</option>
                    </select>
                </div>
                <div class="formRow4">
                    <input type="text" class="" name="" placeholder="Business do you have?">
                    <input type="text" class="" name="" placeholder="you are from?">
                </div>
                <div class="formRow5">
                    <textarea placeholder="Give a short description, what you want from us."></textarea>
                </div>
                <div class="formRow6">
                    <input type="submit" name="" value="Submit" class="form_submit01">
                </div>

            </form>
        </div>
    </div>
@endsection