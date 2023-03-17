<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

    Route::get('/','DefaultController@index')->name('home');
    Route::get('bict','DefaultController@bict')->name('bict');
    Route::get('mba','DefaultController@mba')->name('mba');
    Route::get('how-to-apply','DefaultController@howToApply')->name('howToApply');
    Route::get('college','DefaultController@college')->name('college');
    Route::get('request-info','DefaultController@requestInfo')->name('requestInfo');
    Route::post('save-request-info','DefaultController@saveRequestInfo')->name('saveRequestInfo');   
    Route::get('ict-mela','DefaultController@ictMela')->name('ictMela');
    Route::get('clubs','DefaultController@clubs')->name('clubs');
    Route::get('affiliation','DefaultController@affiliation')->name('affiliation');
    Route::get('about-virinchi','DefaultController@aboutVirinchi')->name('aboutVIrinchi');
    Route::get('smart-by-intellect','DefaultController@smartByIntellect')->name('smartByIntellect');
    Route::get('apply-now','DefaultController@applyNow')->name('applyNow');
    ROute::post('save-application-form','DefaultController@saveApplicationForm')->name('saveApplicationForm');
    Route::get('enrollment-form','DefaultController@enrollmentForm')->name('enrollmentForm');
    Route::get('visit-us','DefaultController@visitUs')->name('visitUs');
    Route::post('save-enrollment-form','DefaultController@saveEnrollmentForm')->name('saveEnrollmentForm');
    Route::post('save-appointment','DefaultController@saveAppointment')->name('saveAppointment');
    Route::get('make-an-appointment','DefaultController@makeAppointment')->name('makeAppointment');
    Route::get('tech-news','DefaultController@techNews')->name('techNews');
    Route::get('tech-news/{slug}','DefaultController@techNewsDetail')->name('techNewsDetail');
    Route::get('events-list','DefaultController@events')->name('eventsListing');
    Route::get('events/{id}','DefaultController@eventDetail')->name('eventDetail');
    Route::get('social-media-hub','DefaultController@socialMediaHub')->name('socialMediaHub');


