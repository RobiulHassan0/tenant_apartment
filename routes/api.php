<?php

use App\Http\Controllers\API\V1\AdminAuthentication;
use App\Http\Controllers\API\V1\ApartmentController;
use App\Http\Controllers\API\V1\BookingController;
use App\Http\Controllers\API\V1\DashboardController;
use App\Http\Controllers\API\V1\TenantController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('/v1')->group(function () {
    // Admin registration and login
    Route::post('/register', [AdminAuthentication::class, 'register'])->name('register');
    Route::post('/login', [AdminAuthentication::class, 'login'])->name('login');

    // Tenant registration and login
    Route::post('/tenant/register', [TenantController::class, 'register']);
    Route::post('/tenant/login', [TenantController::class, 'login']);

    // protected routes for logged in users
    Route::middleware('auth:sanctum')->group(function () {
        // Tenant logout
        Route::post('/tenant/logout', [TenantController::class, 'logout']);
        
        // Apartments and bookings
        Route::apiResource('apartments', ApartmentController::class, );
        Route::apiResource('bookings', BookingController::class, );
        
    });

    // Dashboard Routes
    Route::prefix('/admin')->middleware('auth:sanctum')->group(function () {


        // logout
        Route::post('/logout', [AdminAuthentication::class, 'logout']);

        // Tenants
        Route::get('/tenants', [TenantController::class, 'allTenants']);
        
    });


});
