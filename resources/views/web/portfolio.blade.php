@extends('web.app')

@section('content')
    <div class="container col-xxl-10 px-4 py-5 section_1">
        <div class="row flex-lg-row-reverse align-items-center g-5 pt-4 pb-4">
            <div class="col-lg-12 text-center mb-4">
                <h1 class="display-5 fw-bold lh-2 mb-3 text-white">Our
                    <span>Portfolio</span>
                </h1>
            </div>
        </div>
    </div>

    <div class="container portfolio_section1">        
        <div class="portfolio_one">
            <div class="img1">
                <img src="{{ asset('web/images/portfolio/PurnPay-logo-header.png') }}"
                    alt="Custom Software Development by PurnTech" />
            </div>
            <div class="txt1">
                <h3>No.1 Money Transfer Services Franchise in India</h3>
                <a href="https://purnpay.com/" target="_blank">Visit Site &nbsp; <svg xmlns="http://www.w3.org/2000/svg"
                        width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                    </svg></a>
            </div>
        </div>
        <div class="portfolio_one">
            <div class="img1">
                <img src="{{ asset('web/images/portfolio/PurnTravel.png') }}" alt="Custom Software Development by PurnTech" />
            </div>
            <div class="txt1">
                <h3>Best Hotels Flights Cars Tour Packages & Much More at affordable pricing</h3>
                <a href="https://purntravel.com/" target="_blank">Visit Site &nbsp; <svg
                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                    </svg></a>
            </div>
        </div>
        <div class="portfolio_one">
            <div class="img1">
                <img src="{{ asset('web/images/portfolio/paynims.png') }}"
                    alt="Custom Software Development by PurnTech" style="height:50px;" />
            </div>
            <div class="txt1">
                <h3>Safe, Secure, Seamless Payment Processing Platform for Your Business Needs</h3>
                <a href="https://paynims.in/" target="_blank">Visit Site &nbsp; <svg
                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                    </svg></a>
            </div>
        </div>       
@endsection