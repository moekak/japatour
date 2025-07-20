<?php

use App\Http\Controllers\Admin\BookingController;
use App\Http\Controllers\GetYourGuideController;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

// routes/api.php
// api プレフィックスを除去したルートを定義
// routes/api.php
Route::match(['get', 'post'], '/getyourguide/1/reserve', [GetYourGuideController::class, 'createBooking']);
// GetYourGuide API エンドポイント - ミドルウェアなし
Route::prefix('/getyourguide')->group(function () {
    // 在庫確認
    Route::get('/1/get-availabilities', [GetYourGuideController::class, 'checkAvailability']);
    Route::get('/test', function () {
        return response()->json([
            'status' => 'ok',
            'message' => 'API is working'
        ]);
    });

    // 予約キャンセル
    Route::post('/1/cancel-reservation', [GetYourGuideController::class, 'cancelBooking']);
    
    // 予約更新
    Route::put('/bookings/{bookingId}', [GetYourGuideController::class, 'updateBooking']);
});


Route::post('/create-payment-intent', [BookingController::class, 'createPaymentIntent']);