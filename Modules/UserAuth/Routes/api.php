<?php

use Illuminate\Http\Request;
use Modules\UserAuth\Http\Controllers\UserAuthController;

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

Route::middleware('auth:api')->get('/userauth', function (Request $request) {
    return $request->user();
});

Route::post('register', [UserAuthController::class, 'register']);
Route::post('login', [UserAuthController::class, 'login']);

Route::middleware('auth:api')->group(function () {
    Route::get('user/detail', [UserAuthController::class, 'details']);
    Route::post('logout', [UserAuthController::class, 'logout']);
});


// Route::post('login', 'API\UserController@login');
// Route::post('register', 'API\UserController@register');

// Route::group(['middleware' => 'auth:api'], function(){
//     Route::get('user/detail', 'Api\UserController@details');
//     Route::post('logout', 'Api\UserController@logout');
// }); 