<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\Admin\TourController;
use App\Http\Controllers\mail\SendContactMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name("home");


Route::get('/tour/create', function () {
    return view('admin.tour_create');
});


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
    Route::get('/dashboard', 'AdminController@dashboard');
    Route::get('/users', 'AdminController@users');
    // 他の管理者用ルート
});


Route::middleware(['auth'])->group(function () {
    Route::get('/show', function () {
        return view('show');
    })->name("show");
    
    Route::get('/tour/edit', function () {
        return view('admin.tour_edit');
    });

    Route::get("/tour/list", [TourController::class, "index"])->name("tour_list");

    Route::post("/tour/create", [TourController::class, "store"])->name("tours.store");
    Route::post("/tour/edit", [SendContactMail::class, "SendContactMail"])->name("tours.edit");
    Route::post("/tour/show", [SendContactMail::class, "SendContactMail"])->name("tours.show");
});
// Auth::routes(['register' => false]);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
