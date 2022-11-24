<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductCategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductGalleryController;
use App\Http\Controllers\Admin\ProductStockController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Frontend\DashboardController as FrontendDashboardController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\MyTransactionController;
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
Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/details/{slug}', [FrontendController::class, 'details'])->name('details');
Route::get('/products', [FrontendController::class, 'products'])->name('products');
Route::get('/profile', [FrontendController::class, 'profile'])->name('profile');

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
   
    Route::get('/carts', [FrontendController::class, 'carts'])->name('carts');
    Route::post('/carts/{id}', [FrontendController::class, 'cartAdd'])->name('cart-add');
    Route::delete('/carts/{id}', [FrontendController::class, 'cartDelete'])->name('cart-delete');
    Route::post('/checkout', [FrontendController::class, 'checkout'])->name('checkout');
    Route::get('/checkout/success', [FrontendController::class, 'success'])->name('checkout-success');
    Route::get('/dashboard-user', [FrontendDashboardController::class, 'index'])->name('dashboard-user');
    Route::resource('mytransaction', MyTransactionController::class);
    
    Route::name('dashboard.')->prefix('dashboard')->group(function () {
       
        Route::middleware(['admin'])->group(function () {
            Route::get('/', [DashboardController::class, 'index'])->name('index');
            Route::resource('product', ProductController::class);
          
            Route::resource('stock', ProductStockController::class);
            Route::resource('category', ProductCategoryController::class);
            Route::resource('product.gallery', ProductGalleryController::class)->shallow()->only([
                'index', 'create', 'store', 'destroy'
            ]);
            Route::get('transaction/{id}/status/{status}', [TransactionController::class, 'changeStatus'])->name('transaction.changeStatus');
            Route::resource('transaction', TransactionController::class);
            
            Route::resource('user', UserController::class)->only([
                'index', 'edit', 'update', 'destroy'
            ]);
        });
    });
});