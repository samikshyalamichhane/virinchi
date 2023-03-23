<?php

Route::prefix('admin')->group(function () {
    Route::middleware('can:View EducationModel')->get('/education-model', 'EducationModelController@index')->name('education-model.index');
    Route::middleware('can:Add EducationModel')->get('/education-model/create', 'EducationModelController@create')->name('education-model.create');
    Route::middleware('can:Add EducationModel')->post('/education-model/create', 'EducationModelController@store')->name('education-model.store');
    Route::middleware('can:Edit EducationModel')->get('/education-model/{id}', 'EducationModelController@edit')->name('education-model.edit');
    Route::middleware('can:Edit EducationModel')->post('/education-model/{id}', 'EducationModelController@update')->name('education-model.update');
    Route::middleware('can:Delete EducationModel')->get('/education-model/{id}/delete', 'EducationModelController@destroy')->name('education-model.delete');
});

