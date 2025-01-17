<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\OTPController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('v1/tasks', [TaskController::class, 'index'])->name('api.task'); // Retrieve a list of tasks
Route::post('v1/tasks', [TaskController::class, 'store'])->name('api.task');
Route::get('v1/tasks/{id}', [TaskController::class, 'show']); 
Route::put('v1/tasks/{task}', [TaskController::class, 'update']);
Route::delete('v1/tasks/{id}', [TaskController::class, 'destroy']);

Route::post('otp/generate', [OTPController::class, 'generateOTP'])->name('otp.task');
Route::post('otp/verify', [OTPController::class, 'verifyOTP'])->name('otp.task');
