@extends('web.app')

@section('content')
    <div class="container col-xxl-10 px-4 py-5 section_1">
        <div class="overlay_div_gradient"></div>
        <div class="row flex-lg-row-reverse align-items-center g-5 pt-4 pb-4">

            <div class="col-lg-12 text-center mb-4">
                <h1 class="display-5 fw-bold lh-2 mb-3 text-white">Contact <span>Us</span></h1>
                <p class="lead text-white about_text_gray">Talk to us about your requirements, be it consulting or
                    development, <br>We would be happy to help you</p>

            </div>
        </div>
    </div>

    <div class="container contactInformation">
        <h2>Our Contact <span>Information</span></h2>
        <div class="contactInformation_inner">
            <ul>
                <li>
                    <h3>Corporate Office</h3>
                    <p>203, 2-A/3, S/F Front side, Kundan Mansion, Asaf Ali Road,
                        Turkman Gate New Delhi, DL 110002 India</p>
                </li>
                <li>
                    <h3>Registered Office</h3>
                    <p>203, 2-A/3, S/F Front side, Kundan Mansion, Asaf Ali Road,
                        Turkman Gate New Delhi, DL 110002 India </p>
                </li>
                <li>
                    <h3>Reach Us</h3>
                    <p style="margin-bottom: 0;">info@purntech.in</p>
                    <p> +91 9934606186</p>
                </li>
            </ul>
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
            <form action="https://sheetdb.io/api/v1/5i6hphh90oq1w" id="sheetdb-form" method="post">
                <div class="formRow1">
                    <input type="text" class="" name="data[name]" placeholder="Enter Your Name">
                </div>
                <div class="formRow2">
                    <select class="form-select form-select-lg" name="data[code]"
                        aria-label=".form-select-lg example">
                        <option selected value="+91">+91 India</option>
                        <option value="+354">+354 Iceland</option>
                        <option value="+36">+36 Hungary</option>
                        <option value="+852">+852 Hong Kong</option>
                        <option value="+62">+62 Indonesia</option>
                    </select>
                    <input type="text" class="" name="data[phone]" placeholder="Enter Your Phone no.">
                </div>
                <div class="formRow3">
                    <input type="text" class="" name="data[email]" placeholder="Email">
                    <select class="form-select form-select-lg" name="data[work_type]"
                        aria-label=".form-select-lg example">
                        <option value= "Fintech (AEPS,DMT,BBPS,Recharge...)">Fintech (AEPS,DMT,BBPS,Recharge...)
                        </option>
                        <option value= "Web Design & Development">Web Design & Development</option>
                        <option value= "App Development">App Development</option>
                        <option value= "Digital Marketing">Digital Marketing</option>
                        <option value= "Branding">Branding</option>
                        <option value= "Graphic Design">Graphic Design</option>
                    </select>
                </div>
                <div class="formRow4">
                    <input type="text" class="" name="data[buissness do you have]"
                        placeholder="Business do you have?">
                    <input type="text" class="" name="data[address]" placeholder="you are from?">
                </div>
                <div class="formRow5">
                    <textarea placeholder="Give a short description, what you want from us." name="data[description]"></textarea>
                </div>
                <div class="formRow6">
                    <input type="submit" name="" value="Submit" class="form_submit01">
                </div>

            </form>
        </div>
    </div>

    <script>
        let regform = document.getElementById('sheetdb-form');
        regform.addEventListener("submit", e => {
            e.preventDefault();
            fetch(regform.action, {
                method: "POST",
                body: new FormData(document.getElementById("sheetdb-form")),
            }).then(
                response => response.json()
            ).then((html) => {
                alert("Thanks for Contacting us..! We Will Contact You Soon...");
                document.getElementById("sheetdb-form").reset();
                // you can put any JS code here
                // window.open('page2.html', '_blank');

            });
        });
    </script>
@endsection