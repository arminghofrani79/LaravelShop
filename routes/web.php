<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController as ControllersProductController;
use App\Http\Controllers\Profile\AddressController;
use App\Http\Controllers\Profile\OrderController as ProfileOrderController;
use App\Http\Controllers\Profile\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])
    ->name('index');

//////////// product ////////////
Route::get('/products', [ControllersProductController::class, 'index'])->name('products');
Route::get('/products/{product}', [ControllersProductController::class, 'show'])->name('product-show');

////////////cart ////////////
//show
Route::get('/cart', [CartController::class, 'index'])
    ->name('cart');
//create
Route::post('/cart', [CartController::class, 'store'])
    ->name('cart.store');
//update
Route::put('/cart/{product}', [CartController::class, 'update'])
    ->name('cart.update');
//delete
Route::delete('/cart/{product}', [CartController::class, 'destroy'])
    ->name('cart.destroy');

////////////checkout ////////////

Route::middleware('auth')->group(function () {
    //show
    Route::get('/checkout', [CheckoutController::class, 'index'])
        ->name('checkout');
    //store
    Route::post('/checkout', [CheckoutController::class, 'store'])
        ->name('checkout.store');
});
//////////// article ////////////
Route::get('/articles', [ArticlesController::class, 'index'])->name('articles');
Route::get('/articles/{article}', [ArticlesController::class, 'show'])->name('article-show');

//////////// contact ////////////
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

//////////// user panel ////////////
//""""profile""""//
Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'index'])
        ->name('user-profile');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])
        ->name('user-edit-profile');
    Route::put('/profile', [ProfileController::class, 'update'])
        ->name('user-profile-update');

    Route::get('/profile/pass/edit', [ProfileController::class, 'editPassword'])
        ->name('user-edit-password-profile');
    Route::put('/profile/pass', [ProfileController::class, 'updatePassword'])
        ->name('user-profile-password-update');
});

//""""order side""""//
Route::middleware('auth')->group(function () {
    Route::get('/profile/orders', [ProfileOrderController::class, 'index'])
        ->name('user-order');
    Route::get('/profile/orders/{order}', [ProfileOrderController::class, 'show'])
        ->name('user-watch-order');
});


//""""address side""""//
// show
Route::get('/profile/address', [AddressController::class, 'index'])->name('user-address');
// create
Route::get('/profile/address/create', [AddressController::class, 'create'])->name('user-address-create');
Route::post('/profile/address/create', [AddressController::class, 'store'])->name('user-address-store');
// update
Route::get('/profile/address/{address}/edit', [AddressController::class, 'edit'])->name('user-address-edit');
Route::put('/profile/address/{address}', [AddressController::class, 'update'])->name('user-address-update');
//delete
Route::delete('/profile/address/{address}', [AddressController::class, 'destroy'])->name('user-address-destroy');

////////////////////////////////////

//////////// admin panel ////////////
//""""main side""""//
Route::get('/adminpanel', function () {
    return view('admin/index');
})->name('adminindex');

//""""product side""""//
// show
Route::get('/adminpanel/products', [ProductController::class, 'index'])->name('adminproducts');
// create
Route::get('/adminpanel/products/create', [ProductController::class, 'create'])->name('admin-create-product');
Route::post('/adminpanel/products/store', [ProductController::class, 'store'])->name('admin-store-product');
// // update
Route::get('/adminpanel/products/{product}/edit', [ProductController::class, 'edit'])->name('admin-edit-product');
Route::put('/adminpanel/products/{product}', [ProductController::class, 'update'])->name('admin-update-product');
// // delete
Route::delete('/adminpanel/products/{product}', [ProductController::class, 'destroy'])->name('admin-delete-product');


//""""category side""""//
// show
Route::get('/adminpanel/categories', [CategoryController::class, 'index'])->name('admincategories');
// create
Route::get('/adminpanel/categories/create', [CategoryController::class, 'create'])->name('admin-create-category');
Route::post('/adminpanel/categories/store', [CategoryController::class, 'store'])->name('admin-store-category');
// update
Route::get('/adminpanel/categories/{category}/edit', [CategoryController::class, 'edit'])->name('admin-edit-category');
Route::put('/adminpanel/categories/{category}', [CategoryController::class, 'update'])->name('admin-update-category');
// delete
Route::delete('/adminpanel/categories/{category}', [CategoryController::class, 'destroy'])->name('admin-delete-category');

// article side
// show
Route::get('/adminpanel/articles', [ArticleController::class, 'index'])->name('adminarticles');
// create
Route::get('/adminpanel/articles/create', [ArticleController::class, 'create'])->name('admin-create-article');
Route::post('/adminpanel/articles/store', [ArticleController::class, 'store'])->name('admin-store-article');
// // update
Route::get('/adminpanel/articles/{article}/edit', [ArticleController::class, 'edit'])->name('admin-edit-article');
Route::put('/adminpanel/articles/{article}', [ArticleController::class, 'update'])->name('admin-update-article');
// // // delete
Route::delete('/adminpanel/articles/{article}', [ArticleController::class, 'destroy'])->name('admin-delete-article');

//""""order side""""//
// show
Route::get('/adminpanel/orders', [OrderController::class, 'index'])
    ->name('adminorders');
// watch detail
Route::get('/adminpanel/orders/{order}', [OrderController::class, 'show'])
    ->name('admin-watch-order');
// update status
Route::put('/adminpanel/orders/{order}/status', [OrderController::class, 'updateStatus'])
    ->name('admin-order-status');

//""""users side""""//
//index
Route::get('/adminpanel/users', [UserController::class, 'index'])->name('adminusers');
//create
Route::get('/adminpanel/users/create', [UserController::class, 'create'])->name('admin-create-user');
Route::post('/adminpanel/users/create', [UserController::class, 'store'])->name('admin-store-user');

//show
Route::get('/adminpanel/users/{user}', [UserController::class, 'show'])->name('admin-watch-user');
//update
Route::get('/adminpanel/users/{user}/edit', [UserController::class, 'edit'])->name('admin-edit-user');
Route::put('/adminpanel/users/{user}', [UserController::class, 'update'])->name('admin-update-user');
//delete
Route::delete('/adminpanel/users/{user}/delete', [UserController::class, 'destroy'])->name('admin-destroy-user');

//""""AUTH""""//
Route::middleware('guest')->group(function () {
    //REGISTER
    Route::get('/register', [AuthController::class, 'showRegister'])->name('show-register');
    Route::post('/register', [AuthController::class, 'register'])->name('register');
    //login
    Route::get('/login', [AuthController::class, 'showLogin'])->name('show-login');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
});
Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');
