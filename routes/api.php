<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\BookingController;
use App\Http\Controllers\GetYourGuideController;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;



Route::post('/create-payment-intent', [BookingController::class, 'createPaymentIntent']);
Route::post('/blog/create', [BlogController::class, 'store']);
Route::post('/blogs/{blog}', [BlogController::class, 'update']);