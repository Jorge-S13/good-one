<?php

use App\Http\Controllers\MaterialController;
use App\Http\Controllers\MaterialProductController;
use App\Http\Controllers\MaterialWarehouseController;
use App\Http\Controllers\ProductCalculatorController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WarehouseController;
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

//MATERIALS
Route::prefix('materials')->group(function () {
    Route::get('/',[MaterialController::class, 'index']);
    Route::post('/',[MaterialController::class, 'store']);
    Route::get('/{material}',[MaterialController::class, 'show']);
    Route::patch('/{material}',[MaterialController::class, 'update']);
    Route::delete('/{material}',[MaterialController::class, 'destroy']);
});
//PRODUCTS
Route::prefix('products')->group(function () {
    Route::get('/',[ProductController::class,'index']);
    Route::post('/',[ProductController::class,'store']);
    Route::get('/{product}',[ProductController::class,'show']);
    Route::patch('/{product}',[ProductController::class,'update']);
    Route::delete('/{product}',[ProductController::class,'destroy']);
});
//WAREHOUSES
Route::prefix('warehouses')->group(function () {
    Route::get('/',[WarehouseController::class,'index']);
    Route::post('/',[WarehouseController::class,'store']);
    Route::get('/{warehouse}',[WarehouseController::class,'show']);
    Route::patch('/{warehouse}',[WarehouseController::class,'update']);
    Route::delete('/{warehouse}',[WarehouseController::class,'destroy']);
});
//MATERIAL-WAREHOUSE
Route::prefix('material-warehouses')->group(function () {
    Route::get('/',[MaterialWarehouseController::class,'index']);
    Route::post('/',[MaterialWarehouseController::class,'store']);
    Route::get('/{materialWarehouse}',[MaterialWarehouseController::class,'show']);
    Route::patch('/{materialWarehouse}',[MaterialWarehouseController::class,'update']);
    Route::delete('/{materialWarehouse}',[MaterialWarehouseController::class,'destroy']);
});
//MATERIAL-PRODUCT
Route::prefix('material-product')->group(function () {
    Route::get('/',[MaterialProductController::class,'index']);
    Route::post('/',[MaterialProductController::class,'store']);
    Route::get('/{materialProduct}',[MaterialProductController::class,'show']);
    Route::patch('/{materialProduct}',[MaterialProductController::class,'update']);
    Route::delete('/{materialProduct}',[MaterialProductController::class,'destroy']);
});

//PRODUCT-CALCULATOR
Route::post('/product-calculate',[ProductCalculatorController::class,'calculate']);
