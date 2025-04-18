<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\TourController;
use App\Http\Controllers\GetYourGuideController;
use App\Http\Controllers\mail\SendContactMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name("top");

Route::get('/thank', function () {
    return view('emails.thank');
})->name("thank");

Route::get('/law', function () {
    return view('law');
})->name("law");

Route::get("/admin", [AdminController::class, "index"]);
Route::post("/sendMessage", [SendContactMail::class, "SendContactMail"])->name("sendMessage");

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

    Route::get("/tour/show/{id}", [TourController::class, "show"])->name("tour.show");
    Route::post("/tour/create", [TourController::class, "store"])->name("tours.store");
    Route::post("/tour/update/{id}", [TourController::class, "update"])->name("tour.update");
    Route::get("/tour/edit/{id}", [TourController::class, "edit"])->name("tour.edit");
    Route::post("/tour/show", [SendContactMail::class, "SendContactMail"])->name("tours.show");
    Route::delete("/tour/destroy/{id}", [TourController::class, "destroy"])->name("tours.destroy");
    Route::get("/tour/create", [TourController::class, "create"])->name("admin.tour_create");
    
});
// Auth::routes(['register' => false]);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
