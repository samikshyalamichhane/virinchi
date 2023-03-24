<?php

Route::prefix('admin')->group(function () {
    Route::middleware('can:View ExperienceVirinchi')->get('/experience-virinchi', 'ExperienceVirinchiController@index')->name('experience-virinchi.index');
    Route::middleware('can:Add ExperienceVirinchi')->get('/experience-virinchi/create', 'ExperienceVirinchiController@create')->name('experience-virinchi.create');
    Route::middleware('can:Add ExperienceVirinchi')->post('/experience-virinchi/create', 'ExperienceVirinchiController@store')->name('experience-virinchi.store');
    Route::middleware('can:Edit ExperienceVirinchi')->get('/experience-virinchi/{id}', 'ExperienceVirinchiController@edit')->name('experience-virinchi.edit');
    Route::middleware('can:Edit ExperienceVirinchi')->post('/experience-virinchi/{id}', 'ExperienceVirinchiController@update')->name('experience-virinchi.update');
    Route::middleware('can:Delete ExperienceVirinchi')->get('/experience-virinchi/{id}/delete', 'ExperienceVirinchiController@destroy')->name('experience-virinchi.delete');
});
