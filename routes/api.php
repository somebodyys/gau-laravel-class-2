<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\HelloWorldController;
use App\Http\Controllers\PlantController;
use Illuminate\Http\Request;
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

Route::get('/health', function (){
    return response()->json([
        'status' => true
    ]);
});

Route::prefix('admin')->group(function (){
    Route::get('health', function (Request $request){
        $user = $request->get('user');

        if ($user === 'user') {
            return response()->json([
                'status' => [
                    'message' => [
                        'title' => 'Unauthorized'
                    ]
                ]
            ], 404);
        }

        return response()->json([
            'status' => true
        ]);
    });
});

Route::get('/plants/{plant}', [PlantController::class, 'show']);
