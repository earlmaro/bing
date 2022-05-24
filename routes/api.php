<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('check-permission:agent')->group(function () {
    Route::group([
        'prefix' => '/{userType}/taxpayers',
        'where' => ['userType' => '(agent)'],
    ], function () {
        Route::post(
            '/onboard',
            [UserController::class, 'onboard'],
        );

        Route::get(
            '/all',
            [UserController::class, 'taxpayers']
        );

        Route::get(
            '/{id}',
            [UserController::class, 'taxpayer_agent']
        )->where('id', '[0-9]+');
    });
});
