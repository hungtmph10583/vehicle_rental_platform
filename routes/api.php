<?php

use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\BrandController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::prefix('users')->group(function () {
//     Route::get('/', [UserController::class, 'index'])->name('api.user.index');
//     Route::post('/', [UserController::class, 'store'])->name('api.user.store');
//     Route::get('/{id}', [UserController::class, 'show'])->name('api.user.show');
//     Route::patch('/{id}', [UserController::class, 'update'])->name('api.user.update');
//     Route::delete('{id}/destroy', [UserController::class, 'destroy'])->name('api.user.destroy');
//     Route::post('{id}/recover', [UserController::class, 'recover'])->name('api.user.recover');
// });

Route::group(['as' => 'api.'], function () {

    Route::group(['as' => 'user.'], function () {
        Route::prefix('users')->group(function () {
            Route::get('/', [UserController::class, 'index'])->name('index');
            Route::post('/', [UserController::class, 'store'])->name('store');
            Route::get('/{id}', [UserController::class, 'show'])->name('show');
            Route::patch('/{id}', [UserController::class, 'update'])->name('update');
            Route::delete('{id}/destroy', [UserController::class, 'destroy'])->name('destroy');
            Route::post('{id}/recover', [UserController::class, 'recover'])->name('recover');
        });
    });

    Route::group(['as' => 'brand.'], function () {
        Route::prefix('brands')->group(function () {
            Route::get('/', [BrandController::class, 'index'])->name('index');
            Route::delete('{id}/', [BrandController::class, 'destroy'])->name('destroy');
        });
    });
});