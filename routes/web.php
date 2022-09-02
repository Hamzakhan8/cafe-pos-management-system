<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();
Route::prefix('auth')->group(function (){
    Route::post('login', [LoginController::class, 'login'])->name('auth.login');

    Route::get('login-form', [LoginController::class, 'showLoginForm'])->name('auth.login.show');

    Route::post('register', [RegisterController::class, 'validator'])
    ->name('auth.register');

    Route::get('register-form', [RegisterController::class, 'showRegisterForm'])
    ->name('auth.register.show');

    Route::post('logout', [LoginController::class, 'logout'])->name('auth.logout');

    Route::post('forget-password', [ForgetPasswordController::class, 'show'])
    ->name('auth.forget.password');

    Route::post('store-forget-password', [ForgetPasswordController::class, 'store'])
    ->name('auth.forget.password.store');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware('auth','isAdmin')->group(function(){

    Route::get('/dashboard', [App\Http\Controllers\dashboard\DashboardController::class, 'index'])->name('dashboard.index');

});

