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
    Route::middleware('can:View Machines')->get('/machines', 'MachineController@index')->name('machines.index');
    Route::middleware('can:Add Machines')->get('/machines/create', 'MachineController@create')->name('machines.create');
    Route::middleware('can:Add Machines')->post('/machines/create', 'MachineController@store')->name('machines.store');
    Route::middleware('can:Edit Machines')->get('/machines/{id}', 'MachineController@edit')->name('machines.edit');
    Route::middleware('can:Edit Machines')->post('/machines/{id}', 'MachineController@update')->name('machines.update');
    Route::middleware('can:Delete Machines')->get('/machines/{id}/delete', 'MachineController@destroy')->name('machines.delete');
});
