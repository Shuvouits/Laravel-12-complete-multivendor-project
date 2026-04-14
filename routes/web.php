<?php

use App\Http\Controllers\backend\StoreController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\KycController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\user\UserDashboardController;
use App\Http\Controllers\vendor\VendorDashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::middleware(['auth', 'verified'])->get('/dashboard', function () {
    $user = auth()->user();

    if ($user->user_type === 'vendor') {
        return redirect()->route('vendor.dashboard');
    }

    return app(UserDashboardController::class)->index();
})->name('dashboard');


// User

Route::group(['middleware' => ['auth', 'verified', 'user_role:user' ]], function () {
   // Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('dashboard');

    /** Profile Routes */
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::put('/profile', [ProfileController::class, 'profileUpdate'])->name('profile.update');
    Route::put('/profile/password', [ProfileController::class, 'passwordUpdate'])->name('password.update');

     /** KYC Routes */
    Route::get('/kyc-verification', [KycController::class, 'index'])->name('kyc.index');
    Route::post('/kyc-verification', [KycController::class, 'store'])->name('kyc.store');

});

/*  Vendor Routes */
Route::group(['prefix' => 'vendor', 'as' => 'vendor.', 'middleware' => ['auth', 'verified', 'user_role:vendor']], function () {

    Route::get('/dashboard', [VendorDashboardController::class, 'index'])->name('dashboard');

     /** Shop Profile Routes */
    Route::resource('store-profile', StoreController::class);



});

require __DIR__.'/auth.php';
