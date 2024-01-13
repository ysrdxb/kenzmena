<?php

use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController as AdminAuthenticatedSessionController;
use App\Http\Controllers\Customer\Auth\AuthenticatedSessionController as CustomerAuthenticatedSessionController;
use App\Http\Controllers\Seller\Auth\AuthenticatedSessionController as SellerAuthenticatedSessionController;
use App\Http\Controllers\Admin\Auth\RegisteredUserController as AdminRegisteredUserController;
use App\Http\Controllers\Customer\Auth\RegisteredUserController as CustomerRegisteredUserController;
use App\Http\Controllers\Seller\Auth\RegisteredUserController as SellerRegisteredUserController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

// Guest Routes
Route::middleware('guest')->group(function () {
    // Admin Registration
    Route::get('admin/register', [AdminRegisteredUserController::class, 'create'])
        ->name('admin.register');

    Route::post('admin/register', [AdminRegisteredUserController::class, 'store']);

    // Admin Login
    Route::get('admin/login', [AdminAuthenticatedSessionController::class, 'create'])
        ->name('admin.login');

    Route::post('admin/login', [AdminAuthenticatedSessionController::class, 'store']);

    // Customer Registration
    Route::get('/register', [CustomerRegisteredUserController::class, 'create'])
        ->name('register');

    Route::post('/register', [CustomerRegisteredUserController::class, 'store']);

    // Customer Login
    Route::get('/login', [CustomerAuthenticatedSessionController::class, 'create'])
        ->name('login');      

    Route::post('customer/login', [CustomerAuthenticatedSessionController::class, 'store']);

    // Seller Registration
    Route::get('seller/register', [SellerRegisteredUserController::class, 'create'])
        ->name('seller.register');

    Route::post('seller/register', [SellerRegisteredUserController::class, 'store']);

    // Seller Login
    Route::get('seller/login', [SellerAuthenticatedSessionController::class, 'create'])
        ->name('seller.login');

    Route::post('seller/login', [SellerAuthenticatedSessionController::class, 'store']);

    // Forgot Password
    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
        ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
        ->name('password.email');

    // Reset Password
    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
        ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
        ->name('password.store');
});

// Authenticated Routes
Route::middleware('auth')->group(function () {
    // Email Verification Notice
    Route::get('verify-email', EmailVerificationPromptController::class)
        ->name('verification.notice');

    // Verify Email
    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    // Resend Verification Email
    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');

    // Confirm Password
    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
        ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    // Change Password
    Route::put('password', [PasswordController::class, 'update'])
        ->name('password.update');

    // Logout
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
});
