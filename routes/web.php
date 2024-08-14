<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoleController;

Route::get('{any?}', function() {
    return view('application');
})->where('any', '.*');



Route::post('/send-otp', [AuthController::class, 'sendOtp']);
Route::post('/verify-otp', [AuthController::class, 'verifyOtp']);
Route::post('/send-password', [AuthController::class, 'sendPassword']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
// Auth routes
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
});


// API routes for role fetching
// Route::middleware('auth:sanctum')->get('/api/user-role', [RoleController::class, 'getUserRole']);
