<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\ClientController;
use App\Http\Controllers\api\CategoriesController;
use App\Http\Controllers\api\ModePaymentController;
use App\Http\Controllers\api\Product;
use App\Models\ModePayment;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/client', [ClientController::class, 'index']) ->name('client');
route::post('/client', [ClientController::class, 'store'])->name('client.store');
route::delete('/client/{client}', [ClientController::class, 'destroy'])->name('client.destroy');
route::get('/client/{client}', [ClientController::class, 'show'])->name('client.show');
route::put('/client/{client}', [ClientController::class, 'update'])->name('client.update');



Route::get('/categories', [CategoriesController::class, 'index']) ->name('categories');
route::post('/categories', [CategoriesController::class, 'store'])->name('categories.store');
route::delete('/categories/{category}', [CategoriesController::class, 'destroy'])->name('categories.destroy');
route::get('/categories/{category}', [CategoriesController::class, 'show'])->name('categories.show');
route::put('/categories/{category}', [CategorieController::class, 'update'])->name('categories.update');


Route::get('/mode_payment', [ModePaymentController::class, 'index']) ->name('mode_payment');
route::post('/mode_payment', [ModePaymentController::class, 'store'])->name('mode_payment.store');
route::delete('/mode_payment/{mode_payment}', [ModePaymentController::class, 'destroy'])->name('mode_payment.destroy');
route::get('/mode_payment/{mode_payment}', [ModePaymentController::class, 'show'])->name('mode_payment.show');
route::put('/mode_payment/{mode_payment}', [ModePaymentController::class, 'update'])->name('mode_payment.update');

Route::get('/product', [ProductController::class, 'index']) ->name('product');
route::post('/product', [ProductController::class, 'store'])->name('product.store');
route::delete('/product/{product}', [ProductController::class, 'destroy'])->name('product.destroy');
route::get('/product/{product}', [ProductController::class, 'show'])->name('product.show');
route::put('/product/{product}', [ProductController::class, 'update'])->name('product.update');
