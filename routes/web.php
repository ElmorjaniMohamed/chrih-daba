<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StripeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
Route::get('/', function () {
    return view('home');
})->name('officialhome');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/checkout', [StripeController::class,'index'])->name('checkout');
Route::post('/session', [StripeController::class,'checkout'])->name('session');
Route::get('/success', [StripeController::class,'success'])->name('success');
Route::get('/cancel', [StripeController::class,'cancel'])->name('cancel');

Route::get('/product-list', function () {
    return view('product-list');
})->name('product-list');

Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/filtrerParCategory/{categoy}', [ProductController::class, 'filtrerParCategory'])->name('filtrerParCategory');
Route::get('/filtrerParBrand/{price}', [ProductController::class, 'filtrerParPrice'])->name('filtrerParPrice');
Route::get('/filtrerParBrand/{brand}', [ProductController::class, 'filtrerParBrand'])->name('filtrerParBrand');

require __DIR__.'/auth.php';