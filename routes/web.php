<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\Auth\EmailChangeController;

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/email/change', [EmailChangeController::class, 'showRequestForm'])->name('email.change.form');
    Route::post('/admin/email/change', [EmailChangeController::class, 'sendOtp'])->name('email.change.sendOtp');

    Route::get('/admin/email/change/verify', [EmailChangeController::class, 'showVerifyForm'])->name('email.change.verify');
    Route::post('/admin/email/change/verify', [EmailChangeController::class, 'verifyOtp'])->name('email.change.verifyOtp');
});

Route::get('/auth/google/redirect', [GoogleController::class, 'redirectToGoogle'])->name('google.redirect');
Route::get('/auth/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('google.callback');

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('/resource', [App\Http\Controllers\ResourceController::class, 'index'])->name('resource.index');
Route::get('/download', [App\Http\Controllers\ResourceController::class, 'index']);
Route::get('/learning/aiforwork/buoi2', function () {
    return view('aiforwork.buoi2');
});
Route::get('/learning/aiforwork/meetingnote', function () {
    return view('aiforwork.buoi2');
});
Route::get('/learning/aiforwork/buoi3', function () {
    return view('aiforwork.buoi3');
});
Route::get('/learning/aiforwork/presentation', function () {
    return view('aiforwork.buoi3');
});
Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    return "Đã xóa cache!";
});

Route::get('/logo', function () {
    return view('logo');
});