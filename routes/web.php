<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;



Route::get('/', function () {
    return view('home');
});

// Route::get('dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

//     Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
//     Route::get('/admin/bookings', [AdminController::class, 'bookings']);
// });

// require __DIR__ . '/auth.php';


// //Admin routes...
// Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])
//     ->middleware('auth')->name('admindash');

// Route::middleware(['auth'])->group(function () {

//     Route::get('/dashboard', [AdminController::class, 'dashboard'])
//         ->name('admin.dashboard');

//     Route::get('/bookings', [AdminController::class, 'bookings'])
//         ->name('admin.bookings');
//     Route::get('/admin/bookings/create', [AdminController::class, 'createBooking'])
//         ->name('admin.bookings.create');

//     Route::post('/admin/bookings/store', [AdminController::class, 'storeBooking'])
//         ->name('admin.bookings.store');

//     Route::get('/reports', [AdminController::class, 'reports'])
//         ->name('admin.reports');
// });


// Route::view('/', 'frontend.home')->name('home');
// Route::view('/about', 'frontend.about')->name('about');
Route::view('/services', 'frontend.services')->name('services');
// Route::view('/contact', 'frontend.contact')->name('contact');
Route::get('/booking/create', [BookingController::class, 'create'])
    ->name('booking.create');

Route::post('/booking/store', [BookingController::class, 'store'])
    ->name('booking.store');

// Services page route
Route::get('/services', function () {
    return view('services');
})->name('services');
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');

Route::view('/services-basic', 'services-basic')->name('services-basic');
Route::view('/safety', 'safety')->name('safety');
Route::view('/faq', 'faq')->name('faq');