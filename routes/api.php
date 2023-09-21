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
Route::get('/test', function (Request $request){
    return 'Authenticated';
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
     return $request->user();
});

    Route::middleware('auth:api')->prefix('v1')->group(function(){
        Route::get('/user', function (Request $request) {
           return $request->user();
        });

    Route::get('/agents/{agent}',[AgentsController::class,'show']);

    });
//agents{agent}
//for one specific agent


