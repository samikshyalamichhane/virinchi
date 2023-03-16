<?php

Route::prefix('admin')->group(function () {
    Route::middleware('can:View Technews')->get('/tech-news', 'TechNewsController@index')->name('technews.index');
    Route::middleware('can:Add Technews')->get('/tech-news/create', 'TechNewsController@create')->name('technews.create');
    Route::middleware('can:Add Technews')->post('/tech-news/create', 'TechNewsController@store')->name('technews.store');
    Route::middleware('can:Edit Technews')->get('/tech-news/{id}', 'TechNewsController@edit')->name('technews.edit');
    Route::middleware('can:Edit Technews')->post('/tech-news/{id}', 'TechNewsController@update')->name('technews.update');
    Route::middleware('can:Delete Technews')->get('/tech-news/{id}/delete', 'TechNewsController@destroy')->name('technews.delete');
});
