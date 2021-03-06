<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\Api\JopApiController;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

//jop-api
Route::get('/jop',[JopApiController::class,'index']); 
Route::get('/jop/show/{id}',[JopApiController::class,'show']); 
Route::post('/jop/store',[JopApiController::class,'store']); 
Route::post('/jop/update/{id}',[JopApiController::class,'update']); 
Route::post('/jop/delete/{id}',[JopApiController::class,'destroy']); 