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

// Route::prefix('coursecategory')->group(function() {
//     Route::get('/', 'CourseCategoryController@index');
// });
Route::prefix('admin')->group(function () {
    Route::get('/coursecategory', 'CoursecategoryController@index')->name('coursecategory.index');
    Route::get('/coursecategory/create', 'CoursecategoryController@create')->name('coursecategory.create');
    Route::post('/coursecategory/create', 'CoursecategoryController@store')->name('coursecategory.store');
    Route::get('/coursecategory/{id}', 'CoursecategoryController@edit')->name('coursecategory.edit');
    Route::post('/coursecategory/{id}', 'CoursecategoryController@update')->name('coursecategory.update');
    // Route::middleware('can:Edit coursecategories')->post('/coursecategory/{id}', 'CoursecategoryController@update')->name('coursecategory.update');
    Route::get('/coursecategory/{id}/delete', 'CoursecategoryController@destroy')->name('coursecategory.delete');
});
