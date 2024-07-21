<?php

use App\Http\Controllers\PostCreationController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;



Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard',[PostCreationController::class,'dashboard'])->name('dashboard');
    Route::post('/admin/add/flight',[PostCreationController::class,'addFlight'])->name('add#flight');

});
