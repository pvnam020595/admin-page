<?php

use App\Http\Controllers\CMS\AdminController;
use App\Http\Controllers\CMS\DashboardController;
use App\Http\Controllers\TestController;
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

// Route::prefix('/admin')->group(function () {
//   Route::get('/', [AdminController::class, 'index'])->name('admin');
//   Route::post('/login', [AdminController::class, 'login'])->name('admin.login');
//   Route::get('/forgot_password', [AdminController::class, 'forgotPassword'])->name('admin.forgot_password');
//   Route::get('/register', [AdminController::class, 'register'])->name('admin.register');
// });
// Route::prefix('/dashboard')->middleware('auth:admin')->group(function () {
//   Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
//   Route::get('/logout', [DashboardController::class, 'logout'])->name('dashboard.logout');
// });

// Route::get('/test-sns', [TestController::class, 'testSns']);
// Route::get('/test-sns', [TestController::class, 'testSns']);

use App\Http\Controllers\PostController;

Route::middleware('auth:sanctum')->get('/test', function (Request $request) { return []; });