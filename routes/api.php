<?php

use App\Http\Controllers\UserController;
use App\Jobs\TestSQS;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\Log;

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

use App\Http\Controllers\PostController;

// Route::middleware('auth:sanctum')->group(function () {

//  Route::get('/', [PostController::class, 'index']);
//  Route::get('/post', [PostController::class, 'index']);
// });
//Protected routes
// Route::group(['middleware'=>['auth:sanctum']], function () {
//  Route::post('/logout', function() {
//   return "1111";
//  });
// });
Route::middleware('auth:sanctum')->get('/test', function (Request $request) { return []; });