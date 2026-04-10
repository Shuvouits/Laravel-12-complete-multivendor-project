<?php

use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\user\UserDashboardController;
use Illuminate\Support\Facades\Route;





Route::get('/', [HomeController::class, 'index'])->name('home.index');


//User

Route::group(['middleware' => ['auth', 'verified']], function () {
     Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('dashboard');

      /** Profile Routes */
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::put('/profile', [ProfileController::class, 'profileUpdate'])->name('profile.update');
    Route::put('/profile/password', [ProfileController::class, 'passwordUpdate'])->name('password.update');

});



require __DIR__.'/auth.php';
