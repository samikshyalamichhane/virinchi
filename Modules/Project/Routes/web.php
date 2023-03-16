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
    Route::middleware('can:View Projects')->get('/projects', 'ProjectController@index')->name('projects.index');
    Route::middleware('can:Add Projects')->get('/projects/create', 'ProjectController@create')->name('projects.create');
    Route::middleware('can:Add Projects')->post('/projects/create', 'ProjectController@store')->name('projects.store');
    Route::middleware('can:Edit Projects')->get('/projects/{id}', 'ProjectController@edit')->name('projects.edit');
    Route::middleware('can:Edit Projects')->post('/projects/{id}', 'ProjectController@update')->name('projects.update');
    Route::middleware('can:Delete Projects')->get('/projects/{id}/delete', 'ProjectController@destroy')->name('projects.delete');
    Route::get('/project-gallery/create/{id}', 'ProjectGalleryController@create')->name('projectgallery.create');
    Route::post('/project-galleries', 'ProjectGalleryController@index')->name('projectgallery.index');
    Route::delete('/project-galleries/{productImage}', 'ProjectGalleryController@destroy')->name('projectgallery.delete');

});
Route::post('ckeditor/image_upload', 'ProjectController@upload')->name('upload');
Route::post('/project-gallery/create', 'ProjectGalleryController@store')->name('projectgallery.store');
Route::get('/product-images/{product}/listing', 'ProjectGalleryController@listing')->name('ajax.product-images.listing');
// Route::delete('/product-images/{productImage}', [ProductImageController::class, 'destroy'])->name('ajax.product-images.destroy');

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
   });