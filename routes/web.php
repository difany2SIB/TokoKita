<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('guest.home');
})->name('home');

Route::get('/katalog', function () {
    return view('guest.catalog');
})->name('catalog');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::resource('categories', CategoryController::class)
        ->except('show');

    Route::resource('products', ProductController::class)
        ->except('show');

    Route::resource('customers', CustomerController::class)
        ->except('show');
});
