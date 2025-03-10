<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SentimentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

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
// Halaman Registrasi
Route::get('/register', [AuthController::class, 'registerForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');

// Halaman Login
Route::get('/login', [AuthController::class, 'loginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');

// Halaman Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware(['auth.user'])->group(function () {
    Route::get('/', function () {return view('sentiment');})->name('sentiment');
    Route::get('/index', [AdminController::class, 'index'])->name('index')->middleware('auth');
    Route::get('/sentiment-form', [SentimentController::class, 'create'])->name('sentiment.form')->middleware('auth');

    Route::post('/classify', [SentimentController::class, 'classify'])->name('classify');
});