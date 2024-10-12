<?php

use App\Classes\ElectricCar;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CarResourceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Route::get('/user', function (Request $request) {
//    return $request->user();
//})->middleware('auth:sanctum');

Route::get('/health', function (){
    return response()->json([
        'status' => true
    ]);
});

Route::get('/electric-cars', [CarController::class, 'index']);
Route::post('/electric-cars', [CarController::class, 'store']);
Route::get('/electric-cars/{id}', [CarController::class, 'show']);
Route::delete('/electric-cars/{id}', [CarController::class, 'destroy']);

Route::apiResource('cars', CarResourceController::class);
Route::get('/cars/{car}/test', [CarResourceController::class, 'test']);
