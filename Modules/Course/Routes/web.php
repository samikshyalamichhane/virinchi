<?php

Route::prefix('admin')->group(function () {

    Route::middleware('can:View courses')->get('/courses', 'CourseController@index')->name('courses.index');
    // Route::middleware('can:Add courses')->get('/courses/create', 'CourseController@create')->name('courses.create');
    Route::get('/courses/create', 'CourseController@create')->name('courses.create');
    // Route::get('/coursegallery', 'CourseController@index')->name('coursegallery.store');
    // Route::get('/coursegallery/delete', 'CourseController@index')->name('coursegallery.delete');
    Route::middleware('can:Add courses')->post('/courses/create', 'CourseController@store')->name('courses.store');
    Route::get('/courses/{id}', 'CourseController@edit')->name('courses.edit');
    Route::middleware('can:Edit courses')->post('/courses/{id}', 'CourseController@update')->name('courses.update');
    Route::middleware('can:Delete courses')->get('/courses/{id}/delete', 'CourseController@destroy')->name('courses.delete');
    Route::get('/course-gallery/create/{id}', 'CourseGalleryController@create')->name('coursegallery.create');
    Route::post('/course-galleries', 'CourseGalleryController@index')->name('coursegallery.index');
    Route::delete('/course-galleries/{productImage}', 'CourseGalleryController@destroy')->name('coursegallery.delete');
    Route::post('/course-modules/', 'CourseModuleController@store')->name('coursemodule.store');
    Route::get('/course-modules/{id}', 'CourseModuleController@destroy')->name('coursemodules.delete');
    Route::get('/course-modules/{id}/edit', 'CourseModuleController@edit')->name('coursemodules.edit');
    Route::get('/course-modules/{id}/create', 'CourseModuleController@create')->name('coursemodules.create');
    Route::post('/course-modules/{id}', 'CourseModuleController@update')->name('coursemodules.update');
    Route::post('/course-attributes/', 'CourseAttributeController@store')->name('courseattribute.store');
    Route::get('/course-attributes/{id}', 'CourseAttributeController@destroy')->name('courseattributes.delete');
    Route::get('/course-attributes/{id}/edit', 'CourseAttributeController@edit')->name('courseattributes.edit');
    Route::get('/course-attributes/{id}/create', 'CourseAttributeController@create')->name('courseattributes.create');
    Route::post('/course-attributes/{id}', 'CourseAttributeController@update')->name('courseattributes.update');

});
Route::post('ckeditor/image_upload', 'CourseController@upload')->name('upload');
Route::post('/course-gallery/create', 'CourseGalleryController@store')->name('coursegallery.store');
Route::get('/product-images/{product}/listing', 'CourseGalleryController@listing')->name('ajax.product-images.listing');
// Route::delete('/product-images/{productImage}', [ProductImageController::class, 'destroy'])->name('ajax.product-images.destroy');

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
   });
