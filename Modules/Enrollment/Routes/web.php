<?php


// Route::prefix('enrollment')->group(function() {
    Route::get('/enrollment-lists', 'EnrollmentController@index')->name('enrollment.index');
    Route::get('/application-lists', 'EnrollmentController@applicationLists')->name('applicationLists');
    Route::get('/appointment-lists', 'EnrollmentController@appointmentLists')->name('appointmentLists');
    Route::get('/request-info-lists', 'EnrollmentController@requestInfoLists')->name('requestInfoLists');
    Route::post('product-view', 'EnrollmentController@viewEnrollment')->name('viewEnrollment');
    Route::post('service-view', 'EnrollmentController@viewApplication')->name('viewApplication');
    Route::post('contact-view', 'EnrollmentController@viewAppointment')->name('viewAppointment');
    Route::post('contact-view', 'EnrollmentController@viewRequestInfo')->name('viewRequestInfo');
// });
