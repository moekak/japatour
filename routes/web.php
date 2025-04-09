<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\mail\SendContactMail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name("home");

Route::get('/show', function () {
    return view('show');
})->name("show");


Route::get('/thank', function () {
    return view('emails.thank');
})->name("thank");

Route::get('/law', function () {
    return view('law');
})->name("law");

Route::get("/admin", [AdminController::class, "index"]);
Route::post("/sendMessage", [SendContactMail::class, "SendContactMail"])->name("sendMessage");