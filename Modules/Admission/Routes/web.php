<?php

Route::prefix('admin')->group(function () {
    Route::middleware('can:View Admission')->get('/admission', 'AdmissionController@index')->name('admission.index');
    Route::middleware('can:Add Admission')->get('/admission/create', 'AdmissionController@create')->name('admission.create');
    Route::middleware('can:Add Admission')->post('/admission/create', 'AdmissionController@store')->name('admission.store');
    Route::middleware('can:Edit Admission')->get('/admission/{id}', 'AdmissionController@edit')->name('admission.edit');
    Route::middleware('can:Edit Admission')->post('/admission/{id}', 'AdmissionController@update')->name('admission.update');
    Route::middleware('can:Delete Admission')->get('/admission/{id}/delete', 'AdmissionController@destroy')->name('admission.delete');
});
