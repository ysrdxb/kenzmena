<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AdminDashboardController;

Route::middleware('auth')->prefix('/admin')->group(function(){
    
    Route::get('/', [AdminDashboardController::class,'index'])->name('admin.dashboard');

});