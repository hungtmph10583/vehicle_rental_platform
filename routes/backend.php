<?php

use App\Http\Controllers\Backend\BookingController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\CarController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BackEnd\DashboardController;
// use App\Http\Controllers\BackEnd\ProductController;
// use App\Http\Controllers\BackEnd\PermissionController;
// use App\Http\Controllers\BackEnd\RoleController;
use App\Http\Controllers\BackEnd\UserController;

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

// Route::group(['middleware' => ['permission:backend access']], function () {
Route::group(['as' => 'backend.'], function () {
    Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');
    
    // Route::prefix('products')->group(function () {
    //     Route::get('/', [ProductController::class, 'index'])->name('backend.product.index');
    
    //     Route::get('create', [ProductController::class, 'create'])->name('backend.product.create');
    //     Route::post('create', [ProductController::class, 'store']);
    
    //     Route::get('{id}/edit.html', [ProductController::class, 'edit'])->name('backend.product.edit');
    //     Route::post('{id}/edit.html', [ProductController::class, 'update']);
    
    //     Route::get('{id}/preview.html', [ProductController::class, 'show'])->name('backend.product.show');
    //     Route::get('defective-product.html', [ProductController::class, 'defective'])->name('backend.product.defective');

    //     Route::delete('{id}/destroy', [ProductController::class, 'destroy'])->name('backend.product.destroy');

    //     Route::get('deleted', [ProductController::class, 'deleted'])->name('backend.product.deleted');
    // });

    Route::group(['as' => 'brand.'], function () {
        Route::prefix('brands')->group(function () {
            Route::get('/', [BrandController::class, 'index'])->name('index');

            Route::get('create', [BrandController::class, 'create'])->name('create');
            Route::post('create', [BrandController::class, 'store']);

            Route::get('{id}/edit', [BrandController::class, 'edit'])->name('edit');
            Route::post('{id}/edit', [BrandController::class, 'update']);

            Route::delete('{id}/destroy', [BrandController::class, 'destroy'])->name('destroy');
        });
    });

    Route::group(['as' => 'car.'], function () {
        Route::prefix('cars')->group(function () {
            Route::get('/', [CarController::class, 'index'])->name('index');

            Route::get('create', [CarController::class, 'create'])->name('create');
            Route::post('create', [CarController::class, 'store']);

            Route::get('show', [CarController::class, 'show'])->name('show');

            Route::get('{id}/edit', [CarController::class, 'edit'])->name('edit');
            Route::post('{id}/edit', [CarController::class, 'update']);

            Route::get('{id}/destroy', [CarController::class, 'destroy'])->name('destroy');
        });
    });

    Route::group(['as' => 'booking.'], function () {
        Route::prefix('bookings')->group(function () {
            Route::get('/', [BookingController::class, 'index'])->name('index');

            Route::get('create', [BookingController::class, 'create'])->name('create');
            Route::post('create', [BookingController::class, 'store']);

            Route::get('show', [BookingController::class, 'show'])->name('show');

            Route::get('{id}/edit', [BookingController::class, 'edit'])->name('edit');
            Route::post('{id}/edit', [BookingController::class, 'update']);

            Route::get('{id}/destroy', [BookingController::class, 'destroy'])->name('destroy');
        });
    });

    Route::prefix('user-management')->group(function () {
        Route::prefix('users')->group(function () {
            Route::get('/', [UserController::class, 'index'])->name('user.index');

            Route::get('create', [UserController::class, 'create'])->name('user.create');
            Route::post('create', [UserController::class, 'store']);
            
            Route::get('{id}/edit', [UserController::class, 'edit'])->name('user.edit');
            Route::post('{id}/edit', [UserController::class, 'update']);

            Route::get('{id}/view', [UserController::class, 'show'])->name('user.view');

            Route::get('{id}/change-password', [UserController::class, 'changePasswordForm'])->name('user.change-password');
            Route::post('{id}/change-password', [UserController::class, 'handleChangePassword']);

            Route::delete('{id}/destroy', [UserController::class, 'destroy'])->name('user.destroy');
            Route::get('{id}/recover', [UserController::class, 'recover'])->name('user.recover');

            Route::get('deleted', [UserController::class, 'deleted'])->name('user.deleted');
        });

        // Route::prefix('roles')->group(function () {
        //     Route::get('/', [RoleController::class, 'index'])->name('role.index');
    
        //     Route::get('create', [RoleController::class, 'create'])->name('role.create');
        //     Route::post('create', [RoleController::class, 'store']);
    
        //     Route::get('edit/{id}', [RoleController::class, 'edit'])->name('role.edit');
        //     Route::post('edit/{id}', [RoleController::class, 'update']);
    
        //     Route::get('show/{id}', [RoleController::class, 'show'])->name('role.show');
    
        //     Route::delete('destroy/{id}', [RoleController::class, 'destroy'])->name('role.destroy');
        //     Route::delete('destroyRoleUser/{role_id}/{user_id}', [RoleController::class, 'destroyRoleUser'])->name('role.destroyRoleUser');
        // });
    });
});