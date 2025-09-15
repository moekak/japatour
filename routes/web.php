<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\BookingController;
use App\Http\Controllers\Admin\TopController;
use App\Http\Controllers\Admin\TourController;
use App\Http\Controllers\Mail\SendContactMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


// Route::get('/contact/success', function () {
//     return view('thanks.contact_thanks');
// })->name("email.thanks");
Route::get('/subscription/success', function () {
    return view('thanks.subscription_thanks');
});

Route::get('/book/contact', function () {
    return view('book_contact');
})->name("tour.contact");


Route::get('/policy', function () {
    return view('law');
})->name("law");

Route::get('/terms', function () {
    return view('terms');
})->name("terms");


Route::get("/", [TopController::class, "index"])->name("top");
Route::get("/admin", [AdminController::class, "index"]);
Route::post("/sendMessage", [SendContactMail::class, "SendContactMail"])->name("sendMessage");
Route::get("/tour/show/{id}", [TourController::class, "show"])->name("tour.show");

// routes/web.php
// Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard']);
    Route::get('/users', [AdminController::class, 'users']);
    // 他の管理者用ルート
// });



Route::get("/tour/confirmation", [BookingController::class, "confirmation"])->name("confirmation");
Route::post("/tour/book", [BookingController::class, "store"])->name("book.store");
Route::get("/tour/book/{id}", [BookingController::class, "index"])->name("tour.book");

Route::middleware(['auth'])->group(function () {
    Route::get('/tour/edit', function () {
        return view('admin.tour_edit');
    });

    Route::get("/tour/list", [TourController::class, "list"])->name("tour_list");
        
    Route::get("/tour/create", [TourController::class, "create"])->name("admin.tour_create");
    Route::post("/tour/update/{id}", [TourController::class, "update"])->name("tour.update");
    Route::get("/tour/edit/{id}", [TourController::class, "edit"])->name("tour.edit");
    Route::delete("/tour/destroy/{id}", [TourController::class, "destroy"])->name("tours.destroy");

    Route::get("/blog/list", [BlogController::class, "list"])->name("blog.list");
    Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create');

    Route::delete('/blog/{id}', [BlogController::class, 'destroy'])->name('blog.destroy');
    Route::get('/blog/{id}/edit', [BlogController::class, 'edit'])->name('blog.edit');


    Route::get('/thank', function () {
        return view('thank');
    });
});


Route::get("/tours", [TourController::class, "index"])->name("tours");
Route::post("/tour/store", [TourController::class, "store"])->name("tours.store");
Route::get("/tour/{category}", [TourController::class, "all"])->name("tour");
Auth::routes(['register' => false]);

Route::post('/payment-intent', [BookingController::class, 'createPaymentIntent']);

// ブログ

Route::get('/blogs', [BlogController::class, 'index'])->name('blogs');
Route::get('/blogs/{category}', [BlogController::class, 'all'])->name('blog');
Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog.show');

