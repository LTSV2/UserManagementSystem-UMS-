<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminLoginController as AdminLoginController;
use App\Http\Controllers\admin\AdminDashboardController as AdminDashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ChatController;
use \App\Http\Middleware\AdminAuthenticate;
use App\Http\Controllers\OTPController;



// Route::get('/mobile-verification', [OTPController::class, 'otpsend']);

        // Public routes (accessible without authentication)
        Route::get('/', function () {
            return view('auth/login');
        })->name('login');

        Route::get('auth/login', [LoginController::class, 'index'])->name('account.login');
        Route::get('auth/register', [RegisterController::class, 'register'])->name('account.register');
        Route::post('auth/process-register', [RegisterController::class, 'processRegister'])->name('account.processRegister');
        Route::post('auth/authenticate', [LoginController::class, 'authenticate'])->name('account.authenticate');
        Route::get('auth/logout', [LoginController::class, 'logout'])->name('account.logout');

        // Routes that require authentication
        Route::middleware(['auth'])->group(function () {
        Route::get('auth/dashboard', [DashboardController::class, 'indexdashboard'])->name('account.dashboard');
        Route::get('auth/accountuser', [AccountController::class, 'getAllUsers'])->name('account.accountuser');
        Route::get('accountuser/edit/{id}', [AccountController::class, 'edit'])->name('account.edit');
        Route::put('accountuser/update/', [AccountController::class, 'update'])->name('account.update');
        Route::post('accountuser/destroy/', [AccountController::class, 'destroy'])->name('account.destroy');
        Route::get('/chatuser', [ChatController::class, 'chatuser'])->name('account.chatuser');
        Route::get('otp/generate', [OTPController::class, 'index'])->name('otp.generate');
        Route::post('otp/process-otp', [OTPController::class, 'generateOTP'])->name('otp.generateOTP');
        Route::post('otp/verify', [OTPController::class, 'verifyOTP']);
        });
      // Routes that require admin
        // Route::middleware(['admin'])->group(function () {
        Route::get('admin/login', [AdminLoginController::class, 'index'])->name('admin.login');
        Route::get('/dashboard', [AdminDashboardController::class, 'indexadmin'])->name('admin.dashboard');
        Route::post('admin/authenticate', [AdminLoginController::class, 'authenticate'])->name('admin.authenticate');
        Route::get('auth/accountuser', [AccountController::class, 'getAllUsers'])->name('account.accountuser');
        Route::get('accountuser/edit/{id}', [AccountController::class, 'edit'])->name('account.edit');
        Route::put('accountuser/update/', [AccountController::class, 'update'])->name('account.update');
        Route::post('accountuser/destroy/', [AccountController::class, 'destroy'])->name('account.destroy');
        Route::get('/chatuser', [ChatController::class, 'chatuser'])->name('account.chatuser');
        Route::get('admin/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');
      

         

                // // Gust Meddleware for account
                // Route::group(['prefix' => 'account'],function(){

                //     Route::group(['middleware' => 'guest'],function(){
                //     Route::get('login', [LoginController::class, 'index'])->name('account.login');
                //     Route::get('register', [RegisterController::class, 'register'])->name('account.register');
                //     Route::post('process-register', [RegisterController::class, 'processRegister'])->name('account.processRegister');
                //     Route::post('authenticate', [LoginController::class, 'authenticate'])->name('account.authenticate');
                //     });
                //     // authentication Meddleware for account

                //         Route::group(['middleware' => 'auth'],function(){
                //         Route::get('/dashboard', [DashboardController::class, 'indexdashboard'])->name('account.dashboard');
                //         Route::get('/accountuser', [AccountController::class, 'getAllUsers'])->name('account.accountuser');
                //         Route::get('accountuser/edit/{id}', [AccountController::class, 'edit'])->name('account.edit');
                //         Route::put('accountuser/update/', [AccountController::class, 'update'])->name('account.update');
                //         Route::post('accountuser/destroy/', [AccountController::class, 'destroy'])->name('account.destroy');
                //         Route::get('/chatuser', [ChatController::class, 'chatuser'])->name('account.chatuser');
                //         Route::get('logout', [LoginController::class, 'logout'])->name('account.logout');

                //     });
                // });

                // // Gust Meddleware for admin

                // Route::group(['prefix' => 'admin'],function(){

                // Route::group(['middleware' => 'admin.guests'],function(){
                //     Route::get('login', [AdminLoginController::class, 'index'])->name('admin.login');
                //     Route::post('authenticate', [AdminLoginController::class, 'authenticate'])->name('admin.authenticate');

                // });
                //     // authentication Meddleware for admin

                //     Route::group(['middleware' => 'admin.auth'],function(){
                //     Route::get('dashboard', [AdminDashboardController::class, 'indexadmin'])->name('admin.dashboard');
                //     Route::get('auth/accountuser', [AccountController::class, 'getAllUsers'])->name('account.accountuser');
                //     Route::get('accountuser/edit/{id}', [AccountController::class, 'edit'])->name('account.edit');
                //     Route::put('accountuser/update/', [AccountController::class, 'update'])->name('account.update');
                //     Route::post('accountuser/destroy/', [AccountController::class, 'destroy'])->name('account.destroy');
                //     Route::get('logout', [AdminLoginController::class, 'logout'])->name('admin.logout');

                // });
                // });




