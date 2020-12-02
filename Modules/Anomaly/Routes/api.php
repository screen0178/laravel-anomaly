<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use Modules\Anomaly\Http\Controllers\AnomalyController;
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

Route::middleware('auth:api')->get('/anomaly', function (Request $request) {
    return $request->user();
});

// Route::apiResource('anomaly', AnomalyController::class);
Route::apiResource('anomaly', AnomalyController::class)->middleware('auth:api');
Route::apiResource('raw', KaiRawController::class)->middleware('auth:api');