<?php

Route::prefix('admin')->group(function () {
    Route::middleware('can:View DocumentCheckList')->get('/document-check-list', 'DocumentCheckListController@index')->name('document-check-list.index');
    Route::middleware('can:Add DocumentCheckList')->get('/document-check-list/create', 'DocumentCheckListController@create')->name('document-check-list.create');
    Route::middleware('can:Add DocumentCheckList')->post('/document-check-list/create', 'DocumentCheckListController@store')->name('document-check-list.store');
    Route::middleware('can:Edit DocumentCheckList')->get('/document-check-list/{id}', 'DocumentCheckListController@edit')->name('document-check-list.edit');
    Route::middleware('can:Edit DocumentCheckList')->post('/document-check-list/{id}', 'DocumentCheckListController@update')->name('document-check-list.update');
    Route::middleware('can:Delete DocumentCheckList')->get('/document-check-list/{id}/delete', 'DocumentCheckListController@destroy')->name('document-check-list.delete');
});
