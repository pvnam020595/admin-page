<?php

use App\Http\Controllers\CMS\AdminController;
use App\Http\Controllers\Admins\AuthController;
use App\Http\Controllers\UserController;
use App\Jobs\TestSQS;
use App\Models\CMS\Admins;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Queue;

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
  Route::get('/login/index', [AdminController::class, 'index'])->name('admin.login.index');
  Route::post('/login', [AdminController::class, 'login'])->name('admin.login');
  Route::get('/forgot_password', [AdminController::class, 'forgotPassword'])->name('admin.forgot_password');
  Route::get('/register', [AdminController::class, 'register'])->name('admin.register');
});
// //  Route::get("/login", [AdminController::class, 'viewLogin'])->name('admin.viewLogin');
//  Route::get("/login", function() {
//   return view('admins.login');
//  });
//  Route::post("/login")->name('admin.login');
//  Route::get("/register")->name('admin.register');
// //  Route::post("/register", [AuthController::class, 'store'])->name('admin.store');
// });
// Route::prefix('/admin')->middleware(['web', 'auth:admin'])->group(function () {
// //  Route::get("/logout", [AdminController::class, 'logout'])->name('admin.logout');
//  Route::get("/forgot_password")->name('admin.forgot_password');
// //  Route::get("/dashboard", [AdminController::class, 'dashboard'])->name("admin.dashboard");
// });
// Route::get("/sqs", function() {
//   // Queue::push()
//   TestSQS::dispatch()->onConnection('sqs')->onQueue("MyFistQueue");
// });

