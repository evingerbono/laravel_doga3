<?php

use App\Http\Controllers\BasketController;
use App\Http\Controllers\ProductTypeController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//bejelentkezett felhasználó
Route::middleware('auth.basic')->group(function () {
    Route::get('basket_auth_user', [BasketController::class, 'basketAuthUser']);
    Route::get('bkezdo-products', [BasketController::class, 'bkezdo']);
    Route::post('termekad/{item_Id}',[BasketController::class, 'termekad']);
});
Route::get('baskets', [BasketController::class, 'index']);
Route::get('baskets/{user_id}/{item_id}', [BasketController::class, 'show']);
Route::post('baskets', [BasketController::class, 'store']);

Route::get('show_product_by_id/{userId}/{tipus}', [UserController::class, 'showProductsById']);
Route::delete('basket_delete', [BasketController::class, 'basketDelete']);

//bono
Route::get('prodtypes/{id}',[ProductTypeController::class, 'osszesadat']);

