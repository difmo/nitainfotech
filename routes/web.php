<?php

use Illuminate\Support\Facades\Route;

// routes/web.php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobsController;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', [JobsController::class, 'jobs'])->name('jobs');

// Route::get('/register/employer', [AuthController::class, 'showEmployerRegister']);
// Route::get('/register/candidate', [AuthController::class, 'showCandidateRegister']);
// Route::post('/register', [AuthController::class, 'register']);
// Route::get('/login', [AuthController::class, 'showLogin']);
// Route::post('/login', [AuthController::class, 'login']);

// Route::middleware('auth')->group(function () {
//     Route::get('/employer/dashboard', [EmployerController::class, 'dashboard']);
//     Route::get('/candidate/dashboard', [CandidateController::class, 'dashboard']);
//     Route::get('/jobs', [JobController::class, 'index']);
//     Route::get('/candidate/profile', [CandidateController::class, 'profile']);
//     Route::get('/employer/profile', [EmployerController::class, 'profile']);
//     Route::post('/logout', [AuthController::class, 'logout']);
// });