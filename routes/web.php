<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('dashboard.layouts.home');
// })->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware(['auth', 'verified'])->prefix('dashboard')->name('dashboard.')->group(function(){
    Route::get('', function () {
        return view('dashboard.user.home');
    })->name('home');

    // Route::get("calender", function(){
    //     return view('dashboard.admin.calander');
    // })->name('calender');

    // Route::resource('products', ProductController::class);
    // Route::get('get-product-list', [ProductController::class, 'getProductList']);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
