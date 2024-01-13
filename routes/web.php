<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Customer\DashboardController as CustomerDashboardController;
use App\Http\Controllers\Seller\DashboardController as SellerDashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontendController;

// Authenticated Routes
Route::middleware(['auth', 'verified'])->group(function () {
    // Admin Dashboard
    Route::get('admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');

    // Customer Dashboard
    Route::get('customer/dashboard', [CustomerDashboardController::class, 'index'])->name('customer.dashboard');

    // Seller Dashboard
    Route::get('seller/dashboard', [SellerDashboardController::class, 'index'])->name('seller.dashboard');

    // General Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // ...
});
// FrontEnd Routes
Route::get('/', [FrontendController::class, 'index'])->name('home');

require __DIR__.'/auth.php';
require __DIR__.'/admin/admin.php';
require __DIR__.'/customer/customer.php';
require __DIR__.'/seller/seller.php';
