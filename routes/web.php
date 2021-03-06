<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicantsController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CaptchaServiceController;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::resource('applicants', ApplicantsController::class)->middleware('auth');
Route::resource('applicants', ApplicantsController::class, ['parameters' => ['applicants' => 'id']])->middleware('auth');

Auth::routes();

Route::get('applicants/getstates/{id}', [ ApplicantsController::class, 'getstates']);

Auth::routes();

Route::get('/home', [ ApplicantsController::class, 'showbutton'])->name('home')->middleware('auth');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

// Route::get('/contact-form', [CaptchaServiceController::class, 'index']);
// Route::post('/captcha-validation', [CaptchaServiceController::class, 'capthcaFormValidate']);
Route::get('/reload-captcha', [CaptchaServiceController::class, 'reloadCaptcha'])->name('reloadCaptcha');
