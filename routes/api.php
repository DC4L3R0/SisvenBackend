<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\ClientController;
use App\Http\Controllers\api\CategoriesController;
use App\Http\Controllers\api\ModePaymentController;
use App\Models\Categories;

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

Route::get('/categories', [CategoriesController::class, 'index']) ->name('categories');
route::post('/categories', [CategoriesController::class, 'store'])->name('categories.store');
route::delete('/categories/{category}', [CategoriesController::class, 'destroy'])->name('categories.destroy');
route::get('/categories/{category}', [CategoriesController::class, 'show'])->name('categories.show');
route::put('/categories/{category}', [CategorieController::class, 'update'])->name('categories.update');


Route::get('/mode_payment', [ModePaymentController::class, 'index']) ->name('mode_payment');
Route::get('/product', [ProductController::class, 'index']) ->name('product');