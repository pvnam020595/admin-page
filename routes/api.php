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

Route::post('/test', function(){
 TestSQS::dispatch()->onConnection('sqs')->onQueue("test-sqs");
});
// Route::post('/email-verify', [UserController::class, 'emailVerify'])->name('email-verify');
// Route::post('/login', [UserController::class, 'login']);
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
