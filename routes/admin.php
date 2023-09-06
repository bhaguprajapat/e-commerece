<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminAuthController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// AdminController
Route::get('admin',[AdminController::class,'dashboard']);

// AdminAuthController
Route::get('admin/registr',[AdminAuthController::class,'register'])->name('admin.registr');
Route::get('admin/login',[AdminAuthController::class,'login'])->name('admin.login');
Route::post('admin/post-registr',[AdminAuthController::class,'post_register'])->name('admin.create_registrion');
Route::post('admin/post-login',[AdminAuthController::class,'post_login'])->name('admin.post_login');

