<?php

use App\Http\Controllers\Admins\AdminController;
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
//  Route::get("/login", [AdminController::class, 'viewLogin'])->name('admin.viewLogin');
 Route::get("/login", function() {
  return view('admins.login');
 });
 Route::post("/login")->name('admin.login');
 Route::get("/register")->name('admin.register');
//  Route::post("/register", [AuthController::class, 'store'])->name('admin.store');
});
Route::prefix('/admin')->middleware(['web', 'auth:admin'])->group(function () {
//  Route::get("/logout", [AdminController::class, 'logout'])->name('admin.logout');
 Route::get("/forgot_password")->name('admin.forgot_password');
//  Route::get("/dashboard", [AdminController::class, 'dashboard'])->name("admin.dashboard");
});
// Route::get("/sqs", function() {
//   // Queue::push()
//   TestSQS::dispatch()->onConnection('sqs')->onQueue("MyFistQueue");
// });

Route::get('/eloquent', function() {
  $admins = Admins::find(1);
  
  foreach($admins->roles as $role) {
  }
});
