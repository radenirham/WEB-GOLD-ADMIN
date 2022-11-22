<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GoldController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return redirect()->route('admin.dashboard');
});

Route::prefix('admin')->group(function () {
    Route::prefix('auth')->group(function () {
        // Route::get('/register', [AuthController::class, 'register'])->name('regisadmin');
        Route::get('/login', [AuthController::class, 'login'])->name('loginadmin');
        Route::post('/login', [AuthController::class, 'submit'])->name('admin.auth.login');
        
        // Route::post('/register', [AuthController::class, 'submit_regis'])->name('adminregis');

        Route::middleware(['admin'])->group(function () {
            Route::post('/logout', [AuthController::class, 'logout'])->name('admin.logout');
        });
    });
    Route::middleware(['admin'])->group(function () {
            Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
            Route::get('/gold', [GoldController::class, 'index'])->name('admin.gold');
            Route::get('/gold/add', [GoldController::class, 'add'])->name('admin.gold.add');
            Route::post('/gold/store', [GoldController::class, 'store'])->name('admin.gold.store');
            Route::get('/gold/delete/{number}', [GoldController::class, 'destroy']);

            Route::get('/user', [UserController::class, 'index'])->name('admin.user');
            Route::get('/user/add', [UserController::class, 'add'])->name('admin.user.add');
            Route::post('/user/store', [UserController::class, 'store'])->name('admin.user.store');
            Route::get('/user/edit/{number}', [UserController::class, 'edit']);
            Route::post('/user/store', [UserController::class, 'store'])->name('admin.user.store');
            Route::post('/user/update', [UserController::class, 'update'])->name('admin.user.update');
            Route::get('/user/delete/{number}', [UserController::class, 'destroy']);

            Route::get('/store', [StoreController::class, 'index'])->name('admin.store');
            Route::get('/store/add', [StoreController::class, 'add'])->name('admin.store.add');
            Route::post('/store/store', [StoreController::class, 'store'])->name('admin.store.store');
            Route::get('/store/delete/{number}', [StoreController::class, 'destroy']);
    });
});
