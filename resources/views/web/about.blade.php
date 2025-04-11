@extends('web.app')

@section('content')

        <div class="container col-xxl-10 px-4 py-5 section_1">
            <div class="overlay_div_gradient"></div>
            <div class="row flex-lg-row-reverse align-items-center g-5 pt-4 pb-4">

                <div class="col-lg-12 text-center mb-4">
                    <h1 class="display-5 fw-bold lh-2 mb-3 text-white">About <span>Us</span></h1>
                    <p class="lead text-white about_text_gray">Unlock the potential of your concept, enterprise,
                        aspiration, and bring it to </p>

                </div>
            </div>
        </div>

        <div class="container abtSection2">
            <div class="left_sec">
                <h2>Why<span> PurnTech </span></h2>
                <p>PurnTech is a leading web application development company with over 5+ years of experience in
                    providing tailor-made business software solutions to global businesses.</p>

                <p>Our main objective is to provide the best-in-class IT support and services and accelerate the growth
                    of your business in the competitive market. With our vast work experience, unparalleled technical
                    skills and carefully curated strategies, we will make a positive difference to your business. We are
                    masters in offering effective and exceptional business IT solutions.</p>
            </div>
            <div class="right_sec">
                <img src="{{asset('web/images/svg/about_us.svg')}}" alt="Custom Software Development by PurnTech" />
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="container numbersSection3">
            <ul>
                <li><span class="nmb">5+ </span> <span>years In Business</span></li>
                <li><span class="nmb">35+ </span> <span>Happy Clients</span></li>
                <li><span class="nmb">40+ </span> <span>Projects Completed</span></li>
                <li><span class="nmb">30K+ </span> <span>Line of Code</span></li>
            </ul>
        </div>

        <div class="container ourCoreValueSec4" id="featured-3">
            <h2>Our <span>Core Values</span></h2>
            <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                <div class="feature col">
                    <div class="icon01">
                        <img src="{{asset('web/images/svg/flexibility.svg')}}" alt="Custom Software Development by PurnTech" />
                    </div>
                    <h3>Flexibility</h3>
                    <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another
                        sentence and probably just keep going until we run out of words.</p>
                    
            </div>
                <div class="feature col">
                    <div class="icon01">
                        <img src="{{asset('web/images/svg/teamwork.svg')}}" alt="Custom Software Development by PurnTech" />
                    </div>
                    <h3>Teamwork</h3>
                    <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another
                   
                </div>
                <div class="feature col">
                    <div class="icon01">
                        <img src="{{asset('web/images/svg/trust.svg')}}" alt="Custom Software Development by PurnTech" />
                    </div>
                    <h3>Trust</h3>
                    <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another
                        sentence and probably just keep going until we run out of words.</p>
                    
                </div>
            </div>
        </div>
@endsection