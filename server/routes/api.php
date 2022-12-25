<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\OrderController;

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


Route::get('/offer', [OfferController::class, 'index']);
Route::post('/offer', [OfferController::class, 'create']);
Route::post('/offer_by_categoty_id', [OfferController::class, 'getByCategory_id']);
Route::get('/categories', [CategoryController::class, 'index']);
// Route::get('/c', [CategoryController::class, 'getCategoryById']);
Route::post('/order', [OrderController::class, 'create']);