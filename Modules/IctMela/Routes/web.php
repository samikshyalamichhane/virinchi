<?php

Route::prefix('admin')->group(function () {
    Route::middleware('can:View IctMela')->get('/ictmela', 'IctMelaController@index')->name('ictmela.index');
    Route::middleware('can:Add IctMela')->get('/ictmela/create', 'IctMelaController@create')->name('ictmela.create');
    Route::middleware('can:Add IctMela')->post('/ictmela/create', 'IctMelaController@store')->name('ictmela.store');
    Route::middleware('can:Edit IctMela')->get('/ictmela/{id}', 'IctMelaController@edit')->name('ictmela.edit');
    Route::middleware('can:Edit IctMela')->post('/ictmela/{id}', 'IctMelaController@update')->name('ictmela.update');
    Route::middleware('can:Delete IctMela')->get('/ictmela/{id}/delete', 'IctMelaController@destroy')->name('ictmela.delete');
});