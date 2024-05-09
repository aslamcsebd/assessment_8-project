<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', [HomeController::class, 'home'])->name('home');

// Admin route list
Route::middleware(['auth', 'user-access:admin'])->group(function() {
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::post('/add/vendor', [ProductController::class, 'addVendor'])->name('admin.vendor');
    Route::get('/admin/vendor/list', [ProductController::class, 'vendorList'])->name('admin.vendorList');
    Route::get('/admin/userId/{id}', [HomeController::class, 'userId'])->name('admin.userId');    
});

// vendor route list
Route::middleware(['auth', 'user-access:vendor'])->group(function() {
    Route::get('/vendor/home', [HomeController::class, 'vendorHome'])->name('vendor.home');

    Route::post('/add/category', [ProductController::class, 'addCategory'])->name('vendor.addCategory');
	Route::get('/vendor/category-list', [ProductController::class, 'categoryList'])->name('vendor.categoryList');
    Route::get('/vendor/categoryId/{id}', [HomeController::class, 'categoryId'])->name('vendor.categoryId');
    
    Route::post('/add/product', [ProductController::class, 'addProduct'])->name('vendor.addProduct');
    Route::get('/vendor/product-list', [ProductController::class, 'productList'])->name('vendor.productList');
    Route::get('/vendor/productId/{id}', [HomeController::class, 'productId'])->name('vendor.productId');
});

// customer route list
Route::middleware(['auth', 'user-access:customer'])->group(function() {
	Route::get('/customer/home', [HomeController::class, 'customerHome'])->name('customer.home');
	Route::get('/customer/category-list', [ProductController::class, 'allCategory'])->name('customer.categoryList');
});

// Image
Route::get('/profile', [ProductController::class, 'profile'])->name('profile');
Route::post('/image/upload', [ProductController::class, 'imageUpload'])->name('imageUpload');

Route::fallback(function () {
	// return abort(404);
	return view(404);
});

Route::get('/clear', function (){
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('optimize:clear');
    Artisan::call('route:clear');

    return 'Cleared!';
});
