<?php

Route::prefix('admin')->group(function () {
    Route::middleware('can:View Faq')->get('/faq', 'FaqController@index')->name('faq.index');
    Route::middleware('can:Add Faq')->get('/faq/create', 'FaqController@create')->name('faq.create');
    Route::middleware('can:Add Faq')->post('/faq/create', 'FaqController@store')->name('faq.store');
    Route::middleware('can:Edit Faq')->get('/faq/{id}', 'FaqController@edit')->name('faq.edit');
    Route::middleware('can:Edit Faq')->post('/faq/{id}', 'FaqController@update')->name('faq.update');
    Route::middleware('can:Delete Faq')->get('/faq/{id}/delete', 'FaqController@destroy')->name('faq.delete');
});
