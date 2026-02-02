<?php

use App\Http\Controllers\API\V1\ApartmentController;
use App\Http\Controllers\API\V1\BookingController;
use App\Http\Controllers\API\V1\TenantController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('/v1')->group(function () {
    // Apartments
    Route::apiResource('apartments', ApartmentController::class, );

    // Tenants
    Route::apiResource('tenants', TenantController::class, );

    // bookings
    Route::apiResource('bookings', BookingController::class, );
});
