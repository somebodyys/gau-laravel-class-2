<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\HelloWorldController;
use Illuminate\Support\Facades\Route;

Route::prefix('external')->group(function (){
    Route::get('company', [ClientController::class, 'company']);
});

//Route::group(['prefix' => 'internal'], function (){
//    Route::apiResources([
//        'clients' => ClientController::class
//    ]);
//});

Route::prefix('internal')->group(function (){
    Route::apiResources([
        'clients' => ClientController::class
    ]);
});


Route::get('/hello-world', HelloWorldController::class);
