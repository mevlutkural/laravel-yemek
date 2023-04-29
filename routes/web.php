<?php

use App\Http\Controllers\Dashboard\AuthController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index']);

Route::get('/dashboard/login', [AuthController::class, 'loginForm'])->name('loginForm');
Route::post('/dashboard/login', [AuthController::class, 'login'])->name('login');
Route::get('/dashboard/logout', [AuthController::class, 'logout']);

Route::prefix('dashboard')->middleware('auth:web')->group(function(){
    Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::resource('/users', UserController::class);
    Route::get('/users/{user}/change-password', [UserController::class, 'passwordForm']);
    Route::patch('/users/{user}/change-password', [UserController::class, 'changePassword']);
});