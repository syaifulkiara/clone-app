<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Requests\UpdatePasswordRequest;
 
Route::get('/', [AuthController::class, 'showFormLogin'])->name('login');
Route::get('login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showFormRegister'])->name('register');
Route::post('register', [AuthController::class, 'register']);
 
Route::group(['middleware' => 'auth'], function () {
 
    Route::get('home', [HomeController::class, 'index'])->name('home');
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('profile', [ProfileController::class,'index'])->name('profile');
    Route::get('profile/{id}/edit', [ProfileController::class,'edit'])->name('profile.edit');
    Route::post('profile/{id}/update', [ProfileController::class,'update'])->name('profile.update');
    Route::get('changepassword', [ChangePasswordController::class,'index'])->name('changepassword');
    Route::patch('password', [ChangePasswordController::class,'update'])->name('user.password.update');
 
});

Route::resource('activity', ActivityController::class);

Route::get('/monitoring', [App\Http\Controllers\MonitoringController::class, 'index'])->name('monitoring');
// Route::get('/', function () {
//     return view('welcome');
// });
