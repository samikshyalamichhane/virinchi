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

Route::prefix('college')->group(function() {
    Route::get('/', 'CollegeController@index');
});

Route::prefix('admin')->group(function () {
    Route::middleware('can:View college')->get('/college', 'CollegeController@index')->name('college.index');
    Route::middleware('can:Add college')->get('/college/create', 'CollegeController@create')->name('college.create');
    Route::middleware('can:Add college')->post('/college/create', 'CollegeController@store')->name('college.store');
    Route::middleware('can:Edit college')->get('/college/{id}', 'CollegeController@edit')->name('college.edit');
    Route::middleware('can:Edit college')->post('/college/{id}', 'CollegeController@update')->name('college.update');
    Route::middleware('can:Delete college')->get('/college/{id}/delete', 'CollegeController@destroy')->name('college.delete');
});