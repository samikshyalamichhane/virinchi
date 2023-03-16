<?php

use Modules\PasswordReset\Http\Controllers\PasswordResetController;


Route::get('forget-password', [PasswordResetController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [PasswordResetController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password/{token}', [PasswordResetController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [PasswordResetController::class, 'submitResetPasswordForm'])->name('reset.password.post');