<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\dashboard\Usercontroller;
use App\Http\Controllers\dashboard\UserController as DashboardUserController;

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
    return view('login.registeration.login');
});

Auth::routes();
Route::prefix('auth')->group(function (){
    Route::get('login-form', [LoginController::class, 'showLoginForm'])->name('auth.login.show');

    Route::post('login', [LoginController::class, 'authenticated'])->name('auth.login');


    Route::post('register', [RegisterController::class, 'create'])
    ->name('auth.register');

    Route::get('register-form', [RegisterController::class, 'showRegisterForm'])
    ->name('auth.register.show');

    Route::post('logout', [LoginController::class, 'logout'])->name('auth.logout');

    // Route::post('forget-password', [ForgetPasswordController::class, 'show'])
    // ->name('auth.forget.password');

    // Route::post('store-forget-password', [ForgetPasswordController::class, 'store'])
    // ->name('auth.forget.password.store');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware('auth','isAdmin')->group(function(){
Route::get('/dashboard', [App\Http\Controllers\dashboard\DashboardController::class, 'index'])->name('dashboard.index');

Route::controller(UserController::class)->group(function(){

    Route::get('user','index')->name('user.index');

    Route::get('user-edit/{id}','edit')->name('user.edit');
    Route::post('user-update/{id}','update')->name('user.update');
    Route::get('user-delete/{id}','destroy')->name('user.delete');





});
});


