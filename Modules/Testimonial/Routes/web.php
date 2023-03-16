<?php

Route::prefix('admin')->group(function () {
    Route::middleware('can:View Testimonial')->get('/testimonial', 'TestimonialController@index')->name('testimonial.index');
    Route::middleware('can:Add Testimonial')->get('/testimonial/create', 'TestimonialController@create')->name('testimonial.create');
    Route::middleware('can:Add Testimonial')->post('/testimonial/create', 'TestimonialController@store')->name('testimonial.store');
    Route::middleware('can:Edit Testimonial')->get('/testimonial/{id}', 'TestimonialController@edit')->name('testimonial.edit');
    Route::middleware('can:Edit Testimonial')->post('/testimonial/{id}', 'TestimonialController@update')->name('testimonial.update');
    Route::middleware('can:Delete Testimonial')->get('/testimonial/{id}/delete', 'TestimonialController@destroy')->name('testimonial.delete');
});

Route::prefix('admin')->group(function () {
    Route::middleware('can:View Testimonial Category')->get('/testimonial-category', 'TestimonialCategoryController@index')->name('testimonialcategory.index');
    Route::middleware('can:Add Testimonial Category')->get('/testimonial-category/create', 'TestimonialCategoryController@create')->name('testimonialcategory.create');
    Route::middleware('can:Add Testimonial Category')->post('/testimonial-category/create', 'TestimonialCategoryController@store')->name('testimonialcategory.store');
    Route::middleware('can:Edit Testimonial Category')->get('/testimonial-category/{id}', 'TestimonialCategoryController@edit')->name('testimonialcategory.edit');
    Route::middleware('can:Edit Testimonial Category')->post('/testimonial-category/{id}', 'TestimonialCategoryController@update')->name('testimonialcategory.update');
    Route::middleware('can:Delete Testimonial Category')->get('/testimonial-category/{id}/delete', 'TestimonialCategoryController@destroy')->name('testimonialcategory.delete');
});
