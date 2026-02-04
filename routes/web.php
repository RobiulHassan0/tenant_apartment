<?php

use App\Http\Controllers\API\V1\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/login', function () {
    return view('login');
});

// Admin dashboard
Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

// Tenant Dashboard
Route::get('/tenant/dashboard', function () {
    return view('tenant.dashboard');
})->name('tenant.dashboard');


Route::get('/dashboard/summary', [DashboardController::class, 'summary']);
