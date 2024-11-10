<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\mail\SendContactMail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name("home");
Route::get('/thank', function () {
    return view('thank');
});

Route::get("/admin", [AdminController::class, "index"]);
Route::post("/sendMessage", [SendContactMail::class, "SendContactMail"])->name("sendMessage");