<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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


Route::get('/', [UserController::class, 'showUser']);
Route::post('/create', [UserController::class, 'createUser']);
Route::put('/edit/{id}', [UserController::class, 'updateUser']);
Route::delete('/delete/{id}', [UserController::class, 'deleteUser']);
