<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
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
Route::get('/', [HomeController::class, 'index']);


Route::get('/overview/{id}', [HomeController::class, 'overview'])->name('overview');

Route::get('/cart', [CartController::class, 'showCart'])->name('cart.show');
Route::post('/cart/{productId}', [CartController::class, 'addToCart'])->name('cart.add');


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