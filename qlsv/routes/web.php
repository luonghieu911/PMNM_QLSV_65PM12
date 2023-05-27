<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Middleware\Authenticate;
use \App\Http\Controllers\Admin\LopmonhocController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('admin/login',[LoginController::class,'index'])->name('login');
Route::post('admin/login/store',[LoginController::class,'login']);

Route::middleware(['auth'])->group(function () {
    // ...
    Route::prefix('admin')->group(function () {
        Route::get('home',[MainController::class,'index'])->name('admin');
        Route::prefix('lop')->group(function () {
            Route::get('add',[LopmonhocController::class,'create']);
            Route::post('add',[LopmonhocController::class,'postcreate']);
            Route::get('list',[LopmonhocController::class,'list']);
            Route::get('edit/{lop}',[LopmonhocController::class,'edit']);
            Route::post('edit/{lop}',[LopmonhocController::class,'postedit']);
        });
    });
});

