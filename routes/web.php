<?php

use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\user\UserDashboardController;
use Illuminate\Support\Facades\Route;





Route::get('/', [HomeController::class, 'index'])->name('home.index');


//User

Route::group(['middleware' => ['auth', 'verified']], function () {
     Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('dashboard');

});





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
