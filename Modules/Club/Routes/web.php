<?php

Route::prefix('admin')->group(function () {
    Route::middleware('can:View Club')->get('/club', 'ClubController@index')->name('club.index');
    Route::middleware('can:Add Club')->get('/club/create', 'ClubController@create')->name('club.create');
    Route::middleware('can:Add Club')->post('/club/create', 'ClubController@store')->name('club.store');
    Route::middleware('can:Edit Club')->get('/club/{id}', 'ClubController@edit')->name('club.edit');
    Route::middleware('can:Edit Club')->post('/club/{id}', 'ClubController@update')->name('club.update');
    Route::middleware('can:Delete Club')->get('/club/{id}/delete', 'ClubController@destroy')->name('club.delete');
});
