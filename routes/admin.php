<?php

use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Admin\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Admin\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Admin\Auth\NewPasswordController;
use App\Http\Controllers\Admin\Auth\PasswordController;
use App\Http\Controllers\Admin\Auth\PasswordResetLinkController;
use App\Http\Controllers\Admin\Auth\RegisteredUserController;
use App\Http\Controllers\Admin\Auth\VerifyEmailController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\KycRequestController;
use App\Http\Controllers\admin\ProfileController;
use App\Http\Controllers\backend\BrandController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\RoleController;
use App\Http\Controllers\backend\SettingController;
use App\Http\Controllers\backend\TagController;
use App\Http\Controllers\backend\UserRoleController;

use Illuminate\Support\Facades\Route;

Route::middleware('guest:admin')
    ->prefix('admin')
    ->as('admin.')
    ->group(function () {
        Route::get('register', [RegisteredUserController::class, 'create'])
            ->name('register');

        Route::post('register', [RegisteredUserController::class, 'store']);

        Route::get('login', [AuthenticatedSessionController::class, 'create'])
            ->name('login');

        Route::post('login', [AuthenticatedSessionController::class, 'store']);

        Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
            ->name('password.request');

        Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
            ->name('password.email');

        Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
            ->name('password.reset');

        Route::post('reset-password', [NewPasswordController::class, 'store'])
            ->name('password.store');
    });

Route::middleware(['auth:admin'])->prefix('admin')->as('admin.')->group(function () {

    // Admin

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    /** Profile Routes */
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::put('/profile', [ProfileController::class, 'profileUpdate'])->name('profile.update');
    Route::put('/profile/password', [ProfileController::class, 'passwordUpdate'])->name('password.update');

    /** Kyc routes */
    Route::get('/kyc-requests', [KycRequestController::class, 'index'])->name('kyc.index');
    Route::get('/kyc-requests/pending', [KycRequestController::class, 'pending'])->name('kyc.pending');
    Route::get('/kyc-requests/rejected', [KycRequestController::class, 'rejected'])->name('kyc.rejected');
    Route::get('/kyc-requests/{kyc_request}', [KycRequestController::class, 'show'])->name('kyc.show');
    Route::get('/kyc-requests/download/{kyc_request}', [KycRequestController::class, 'download'])->name('kyc.download');
    Route::put('/kyc-requests/{kyc_request}/update', [KycRequestController::class, 'update'])->name('kyc.update');

    Route::get('verify-email', EmailVerificationPromptController::class)
        ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
        ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');

    /** Role Routes */
    Route::resource('/role', RoleController::class);
    Route::resource('/role-users', UserRoleController::class);

    /** Settings Routes */
    Route::get('/settings', [SettingController::class, 'index'])->name('settings.index');
    Route::put('/settings/general-settings', [SettingController::class, 'generalSettings'])->name('settings.general');
    Route::get('/commission-settings', [SettingController::class, 'commissionSettingsIndex'])->name('commission-settings.index');
    Route::put('/commission-settings', [SettingController::class, 'commissionSettings'])->name('commission-settings.store');
    Route::get('/site-settings', [SettingController::class, 'siteSettingsIndex'])->name('site-settings.index');
    Route::put('/site-settings', [SettingController::class, 'siteSettings'])->name('site-settings.store');
    Route::get('/logo-settings', [SettingController::class, 'logoSettingsIndex'])->name('logo-settings.index');
    Route::put('/logo-settings', [SettingController::class, 'logoSettings'])->name('logo-settings.store');

    /** Categories Routes */
    Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
    Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('/categories/nested', [CategoryController::class, 'getNestedCategories'])->name('categories.nested');
    Route::post('/categories/update-order', [CategoryController::class, 'updateOrder'])->name('categories.update-order');
    Route::get('/categories/{id}', [CategoryController::class, 'show'])->name('categories.show');
    Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('categories.update');
    Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');

    /** Tags Routes */
    Route::resource('/tags', TagController::class);

    /** Brand Routes */
    Route::resource('/brands', BrandController::class);

});
