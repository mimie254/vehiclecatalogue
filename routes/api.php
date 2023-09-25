<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgentsController;

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
Route::get('/test', function (){
    return 'Authenticated';
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
     return $request->user();
});

    Route::middleware('auth:api')->prefix('v1')->group(function(){
        Route::get('/user', function (Request $request) {
           return $request->user();
        });

    //Route::get('/agents/{agent}',[AgentsController::class,'show']);

    //Route::get('/agents',[AgentsController::class,'index']);


        Route::apiResource('/agents', AgentsController::class);

    //Route::apiResources('/agents', [AgentsController::class]);

        //Route::apiResource('/agents', [AgentsController::class]);


        //Route::apiResources([
           // '/agents' => 'AgentsController',
            // Add more resources here if needed
       // ]);
    });
//agents{agent}
//for one specific agent


