<?php


// Route::prefix('enrollment')->group(function() {
    Route::get('/enrollment-lists', 'EnrollmentController@index')->name('enrollment.index');
    Route::get('/application-lists', 'EnrollmentController@applicationLists')->name('applicationLists');
    Route::get('/appointment-lists', 'EnrollmentController@appointmentLists')->name('appointmentLists');
    Route::get('/request-info-lists', 'EnrollmentController@requestInfoLists')->name('requestInfoLists');
    Route::post('enrollment-view', 'EnrollmentController@viewEnrollment')->name('viewEnrollment');
    Route::post('application-view', 'EnrollmentController@viewApplication')->name('viewApplication');
    Route::post('appointment-view', 'EnrollmentController@viewAppointment')->name('viewAppointment');
    Route::post('requestinfo-view', 'EnrollmentController@viewRequestInfo')->name('viewRequestInfo');
Route::get('/requestinfo/{id}/delete', 'EnrollmentController@deleteRequestInfo')->name('requestInfo.delete');
Route::get('/appointment/{id}/delete', 'EnrollmentController@deleteAppointment')->name('appointment.delete');
Route::get('/application/{id}/delete', 'EnrollmentController@deleteApplication')->name('application.delete');
Route::get('/enrollment/{id}/delete', 'EnrollmentController@deleteEnrollment')->name('enrollment.delete');
// });
