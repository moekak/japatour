<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\Admin\BookingController;
use App\Http\Controllers\Admin\TopController;
use App\Http\Controllers\Admin\TourController;
use App\Http\Controllers\GetYourGuideController;
use App\Http\Controllers\mail\SendContactMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/thank', function () {
    return view('emails.thank');
})->name("thank");

Route::get('/book/contact', function () {
    return view('book_contact');
})->name("tour.contact");


Route::get('/law', function () {
    return view('law');
})->name("law");

Route::get("/", [TopController::class, "index"])->name("top");
Route::get("/admin", [AdminController::class, "index"]);
Route::post("/sendMessage", [SendContactMail::class, "SendContactMail"])->name("sendMessage");
    Route::get("/tour/show/{id}", [TourController::class, "show"])->name("tour.show");

// routes/web.php
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard']);
    Route::get('/users', [AdminController::class, 'users']);
    // 他の管理者用ルート
});


Route::middleware(['auth'])->group(function () {
    Route::get('/tour/edit', function () {
        return view('admin.tour_edit');
    });

    Route::get("/tour/list", [TourController::class, "index"])->name("tour_list");
    Route::post("/tour/create", [TourController::class, "store"])->name("tours.store");
    Route::post("/tour/update/{id}", [TourController::class, "update"])->name("tour.update");
    Route::get("/tour/edit/{id}", [TourController::class, "edit"])->name("tour.edit");
    Route::post("/tour/show", [SendContactMail::class, "SendContactMail"])->name("tours.show");
    Route::delete("/tour/destroy/{id}", [TourController::class, "destroy"])->name("tours.destroy");
    Route::get("/tour/create", [TourController::class, "create"])->name("admin.tour_create");
    Route::get("/tour/book/{id}", [BookingController::class, "index"])->name("tour.book");
    Route::get("/tour/book/{id}/{date}", [BookingController::class, "index"])->name("tour_date.book");


    Route::get('/thank', function () {
        return view('thank');
    });
    
});
Auth::routes(['register' => false]);

Route::post('/payment-intent', [BookingController::class, 'createPaymentIntent']);
