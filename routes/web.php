<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CategoryTagController;
use App\Http\Controllers\AuthController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])
        ->name('auth.showLoginForm');
    Route::post('/login', [AuthController::class, 'login'])
        ->name('auth.login');
    Route::get('/register', [AuthController::class, 'showRegistrationForm'])
        ->name('auth.showRegistrationForm');
    Route::post('/register', [AuthController::class, 'register'])
        ->name('auth.register');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [AuthController::class, 'dashboard'])
        ->name('auth.dashboard');
    Route::resource('users', UserController::class);
    Route::resource('restaurants', RestaurantController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('category-tags', CategoryTagController::class);
    Route::post('/logout', [AuthController::class, 'logout'])
        ->name('auth.logout');
});
