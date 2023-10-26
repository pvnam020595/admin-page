<?php

use App\Http\Controllers\Admins\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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

Route::prefix('/admin')->group(function () {
 Route::get("/login", [AdminController::class, 'viewLogin'])->name('admin.viewLogin');
 Route::post("/login", [AdminController::class, 'login'])->name('admin.login');
});
Route::prefix('/admin')->middleware(['web', 'auth:admin'])->group(function () {
 Route::get("/register", [AdminController::class, 'register'])->name('admin.register');
 Route::post("/register", [AdminController::class, 'storeUser']);
 Route::get("/forgot_password", [AdminController::class, 'forGotPassword'])->name('admin.forgot_password');
 Route::get("/dashboard", [AdminController::class, 'dashboard'])->name("admin.dashboard");
});
