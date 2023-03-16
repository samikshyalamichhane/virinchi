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

// Route::post('/search', 'FrontendController@haveibeenpwned');
// Route::get('/', 'FrontendController@index')->name('home');
// Route::get('/contact', 'FrontendController@contact')->name('contact');
// Route::post('/contact', 'FrontendController@contactUs')->name('contactPost');
// Route::post('/product-inquire', 'FrontendController@productInquire')->name('productInquire');
// Route::post('/service-inquire', 'FrontendController@serviceInquire')->name('serviceInquire');

// Route::post('/subscribe', 'FrontendController@subscribe')->name('subscribePost');
// Route::get('/projects', 'FrontendController@projects')->name('projects');
// Route::get('/project/{slug}', 'FrontendController@projectsDetail')->name('projects.detail');
// Route::get('/machines', 'FrontendController@machines')->name('machines');
// Route::get('/machine/{slug}', 'FrontendController@machineDetail')->name('machines.detail');

// Route::get('/about', 'FrontendController@about')->name('about');

// Route::get('/customer/login','CustomerController@customerLoginPage')->name('customer.loginpage');
// Route::post('/customer/login','CustomerController@customerPostLogin')->name('customer.login');
// Route::get('/customer/register','CustomerController@customerRegisterPage')->name('customer.registerpage');
// Route::post('/customer/register','CustomerController@customerPostRegister')->name('customer.register');

// Route::group(['prefix'=>'customer','middleware'=>['auth','role:customer']], function(){
// Route::get('/dashboard', 'CustomerController@customerDashboard')->name('customer-dashboard');
// });
// Route::get('/customer/verify/{hash}', 'CustomerController@verify')->name('verify');
// Route::get('/customer-logout', 'CustomerController@customerLogout')->name('customerLogout');


// Route::get('{any}', 'FrontendController@dynamicPages')->name('getPages');

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


