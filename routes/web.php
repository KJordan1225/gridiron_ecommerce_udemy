<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\Admin\SizeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\ColorController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubcategoryController;
use App\Http\Controllers\Admin\ChildcategoryController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\UserController as FrontendUserController;
use App\Http\Controllers\OrderController as FrontendOrderController;
use App\Http\Controllers\ProductController as FrontendProductController;
use App\Http\Controllers\ReviewController as FrontendReviewController;

Route::get('admin/login', [AdminController::class,'login'])->name('admin.login');
Route::post('admin/auth', [AdminController::class,'auth'])->name('admin.auth');

/*****admin auth routes*******/
Route::middleware('admin')->prefix('admin')->group(function() {
    Route::get('dashboard', [AdminController::class,'index'])->name('admin.index');
    Route::post('admin/logout', [AdminController::class,'logout'])->name('admin.logout');
    //category routes
    Route::resource('categories', CategoryController::class, [
        'names' => [
            'index' => 'admin.categories.index',
            'create' => 'admin.categories.create',
            'store' => 'admin.categories.store',
            'edit' => 'admin.categories.edit',
            'update' => 'admin.categories.update',
            'destroy' => 'admin.categories.destroy',
        ]
    ]);
    //subcategory routes
    Route::resource('subcategories', SubcategoryController::class, [
        'names' => [
            'index' => 'admin.subcategories.index',
            'create' => 'admin.subcategories.create',
            'store' => 'admin.subcategories.store',
            'edit' => 'admin.subcategories.edit',
            'update' => 'admin.subcategories.update',
            'destroy' => 'admin.subcategories.destroy',
        ]
    ]);
    //childcategory routes
    Route::resource('childcategories', ChildcategoryController::class, [
        'names' => [
            'index' => 'admin.childcategories.index',
            'create' => 'admin.childcategories.create',
            'store' => 'admin.childcategories.store',
            'edit' => 'admin.childcategories.edit',
            'update' => 'admin.childcategories.update',
            'destroy' => 'admin.childcategories.destroy',
        ]
    ]);
	
});