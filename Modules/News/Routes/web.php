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

Route::prefix('admin')->group(function () {
    Route::middleware('can:View News')->get('/events', 'NewsController@index')->name('events.index');
    Route::middleware('can:Add News')->get('/events/create', 'NewsController@create')->name('events.create');
    Route::middleware('can:Add News')->post('/events/create', 'NewsController@store')->name('events.store');
    Route::middleware('can:Edit News')->get('/events/{id}', 'NewsController@edit')->name('events.edit');
    Route::middleware('can:Edit News')->post('/events/{id}', 'NewsController@update')->name('events.update');
    Route::middleware('can:Delete News')->get('/events/{id}/delete', 'NewsController@destroy')->name('events.delete');
});

