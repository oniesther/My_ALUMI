<?php

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

Route::get('/', [App\Http\Controllers\HomePageController::class, 'index']);

Auth::routes();

Route::post('/member/login', [App\Http\Controllers\HomePageController::class, 'member_login'])->name('member.login');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// logout
Route::get('log-out', [App\Http\Controllers\HomeController::class, 'log_out']);

// Admin
Route::get('/admin/login', [App\Http\Controllers\HomePageController::class, 'admin_login']);
Route::middleware(['auth', 'isAdmin'])->group(function () {
  Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.dashboard');
  Route::get('/admin/addmember', [App\Http\Controllers\AdminController::class, 'addmember'])->name('admin.addmember');
  Route::post('/admin/addmember/add', [App\Http\Controllers\AdminController::class, 'store'])->name('admin.addnewmember');
  Route::get('/admin/viewmember', [App\Http\Controllers\AdminController::class, 'viewmember'])->name('admin.viewmember');
  Route::get('/admin/suspended', [App\Http\Controllers\AdminController::class, 'suspended'])->name('admin.suspended');
  Route::get('/admin/createmessage', [App\Http\Controllers\AdminController::class, 'createmessage'])->name('admin.createmessage');
  Route::get('/admin/viewreply', [App\Http\Controllers\AdminController::class, 'viewreply'])->name('admin.viewreply');
  Route::get('/admin/createpayment', [App\Http\Controllers\AdminController::class, 'createpayment'])->name('admin.createpayment');
  Route::get('/admin/viewpayment', [App\Http\Controllers\AdminController::class, 'viewpayment'])->name('admin.viewpayment');
  
  // User
  Route::get('/admin/notification', [App\Http\Controllers\AdminController::class, 'notification'])->name('admin.notification');
  });




