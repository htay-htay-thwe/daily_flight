<?php

use App\Http\Controllers\Api\getFlightController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostCreationController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
    Route::get('/get/flight/{origin}/{destination}/{departureDate}',[getFlightController::class,'getFlight'])->name("post#create");

