<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    //index
    public function indexView()
    {
        return view('web.index');
    }

    //website-development
    public function websiteDevelopmentView()
    {
        return view('web.website-development');
    }

    //app-development
    public function appDevelopmentView()
    {
        return view('web.app-development');
    }

    //qa-testing
    public function qaTestingView()
    {
        return view('web.qa-testing');
    }

    //seo-digital-marketing
    public function seoDigitalMarketingView()
    {
        return view('web.seo-digital-marketing');
    }

    //website-maintenance
    public function websiteMaintenanceView()
    {
        return view('web.website-maintenance');
    }

    //dedicated-resource
    public function dedicatedResourceView()
    {
        return view('web.dedicated-resource');
    }

    //ai-process-automation
    public function aiProcessAutomationView()
    {
        return view('web.ai-process-automation');
    }

    //robotic-process-automation
    public function roboticProcessAutomationView()
    {
        return view('web.robotic-process-automation');
    }

    //b-to-b
    public function BtoBView()
    {
        return view('web.b-to-b');
    }

    //b-to-c
    public function BtoCView()
    {
        return view('web.b-to-c');
    }

    //payout
    public function payoutView()
    {
        return view('web.payout');
    }

    //portfolio
    public function portfolioView()
    {
        return view('web.portfolio');
    }

    //about
    public function aboutView()
    {
        return view('web.about');
    }

    //contact-us
    public function contactUsView()
    {
        return view('web.contact-us');
    }

    //enquiry
    public function enquiryView()
    {
        return view('web.enquiry');
    }

    //services
    public function servicesView()
    {
        return view('web.services');
    }

    //pricing
    public function pricingView()
    {
        return view('web.pricing');
    }

    //terms-condition
    public function termsConditionView()
    {
        return view('web.terms-condition');
    }

    //privacy-policy
    public function privacyPolicyView()
    {
        return view('web.privacy-policy');
    }
}
