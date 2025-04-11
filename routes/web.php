<?php

use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WebController::class, 'indexView']);
Route::get('/website-development', [WebController::class, 'websiteDevelopmentView']);
Route::get('/app-development', [WebController::class, 'appDevelopmentView']);
Route::get('/qa-testing', [WebController::class, 'qaTestingView']);
Route::get('/seo-digital-marketing', [WebController::class, 'seoDigitalMarketingView']);
Route::get('/website-maintenance', [WebController::class, 'websiteMaintenanceView']);
Route::get('/dedicated-resource', [WebController::class, 'dedicatedResourceView']);
Route::get('/ai-process-automation', [WebController::class, 'aiProcessAutomationView']);
Route::get('/robotic-process-automation', [WebController::class, 'roboticProcessAutomationView']);
Route::get('/b-to-b', [WebController::class, 'BtoBView']);
Route::get('/b-to-c', [WebController::class, 'BtoCView']);
Route::get('/payout', [WebController::class, 'payoutView']);
Route::get('/portfolio', [WebController::class, 'portfolioView']);
Route::get('/about', [WebController::class, 'aboutView']);
Route::get('/contact-us', [WebController::class, 'contactUsView']);
Route::get('/enquiry', [WebController::class, 'enquiryView']);
Route::get('/services', [WebController::class, 'servicesView']);
Route::get('/pricing', [WebController::class, 'pricingView']);
Route::get('/terms-condition', [WebController::class, 'termsConditionView']);
Route::get('/privacy-policy', [WebController::class, 'privacyPolicyView']);