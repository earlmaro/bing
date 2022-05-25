<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::post(
    '/create-user',
    [UserController::class, 'create_user']
);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/entry', [UserController::class, 'get_users']);
