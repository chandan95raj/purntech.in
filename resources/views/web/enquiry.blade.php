@extends('web.app')

@section('content')
    <div class="container col-xxl-10 px-4 py-5 section_1">
            <div class="overlay_div_gradient"></div>
            <div class="row flex-lg-row-reverse align-items-center g-5 pt-4 pb-4">

                <div class="col-lg-12 text-center mb-4">
                    <h1 class="display-5 fw-bold lh-2 mb-3 text-white">Request <span>a Quote </span></h1>
                    <p class="lead text-white about_text_gray">Request a detailed project quote and see how we can
                        transform your vision into reality</p>

                </div>
            </div>
    </div>

    <div class="container letsTalk">
        <div class="map01">
            <img src="{{asset('web/images/quotes.jpg')}}" alt="Custom Software Development by PurnTech" />
        </div>
        <div class="contactForm">

            <form action="https://sheetdb.io/api/v1/mve5fsafsjzjd" id="sheetdb-form" method="post">
                <div class="formRow1">
                    <input type="text" class="" name="data[name]" placeholder="Enter Your Name">
                </div>
                <div class="formRow2">
                    <input type="text" class="" name="data[phone]" placeholder="Enter Your Phone no.">
                    <input type="text" class="" name="data[email]" placeholder="Email">
                </div>
                <div class="formRow3">
                    <input type="text" class="" name="data[company_name]" placeholder="Company Name">

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

                <div class="formRow5">
                    <textarea placeholder="Project Info" style="height:200px;"></textarea>
                </div>
                <div class="formRow6">
                    <input type="submit" name="submit" value="Submit" class="form_submit01">
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