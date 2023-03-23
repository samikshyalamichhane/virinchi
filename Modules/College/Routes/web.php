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

// Route::prefix('college')->group(function() {
//     Route::get('/', 'CollegeController@index');
// });

Route::prefix('admin')->group(function () {
    Route::middleware('can:View College')->get('/college', 'CollegeController@index')->name('college.index');
    Route::middleware('can:Add College')->get('/college/create', 'CollegeController@create')->name('college.create');
    Route::middleware('can:Add College')->post('/college/create', 'CollegeController@store')->name('college.store');
    Route::middleware('can:Edit College')->get('/college/{id}', 'CollegeController@edit')->name('college.edit');
    Route::middleware('can:Edit College')->post('/college/{id}', 'CollegeController@update')->name('college.update');
    Route::middleware('can:Delete College')->get('/college/{id}/delete', 'CollegeController@destroy')->name('college.delete');
});