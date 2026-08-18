<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\IndexController;
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
Route::middleware(['auth'])
    ->prefix('profile')->group(function () {
        //""""profile""""//
        Route::get('/', [ProfileController::class, 'index'])
            ->name('user-profile');
        Route::get('/edit', [ProfileController::class, 'edit'])
            ->name('user-edit-profile');
        Route::put('/', [ProfileController::class, 'update'])
            ->name('user-profile-update');

        Route::get('/pass/edit', [ProfileController::class, 'editPassword'])
            ->name('user-edit-password-profile');
        Route::put('/pass', [ProfileController::class, 'updatePassword'])
            ->name('user-profile-password-update');


        //""""order side""""//
        Route::middleware('auth')->group(function () {
            Route::get('/orders', [ProfileOrderController::class, 'index'])
                ->name('user-order');
            Route::get('/orders/{order}', [ProfileOrderController::class, 'show'])
                ->name('user-watch-order');
        });


        //""""address side""""//
        // show
        Route::get('/address', [AddressController::class, 'index'])->name('user-address');
        // create
        Route::get('/address/create', [AddressController::class, 'create'])->name('user-address-create');
        Route::post('/address/create', [AddressController::class, 'store'])->name('user-address-store');
        // update
        Route::get('/address/{address}/edit', [AddressController::class, 'edit'])->name('user-address-edit');
        Route::put('/address/{address}', [AddressController::class, 'update'])->name('user-address-update');
        //delete
        Route::delete('/address/{address}', [AddressController::class, 'destroy'])->name('user-address-destroy');
    });


//////////// admin panel ////////////
Route::middleware(['auth', 'admin'])
    ->prefix('adminpanel')->group(function () {

        //""""main side""""//
        Route::get('/', [IndexController::class, 'index'])->name('adminindex');

        //""""product side""""//
        // show
        Route::get('/products', [ProductController::class, 'index'])->name('adminproducts');
        // create
        Route::get('/products/create', [ProductController::class, 'create'])->name('admin-create-product');
        Route::post('/products/store', [ProductController::class, 'store'])->name('admin-store-product');
        // // update
        Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('admin-edit-product');
        Route::put('/products/{product}', [ProductController::class, 'update'])->name('admin-update-product');
        // // delete
        Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('admin-delete-product');


        //""""category side""""//
        // show
        Route::get('/categories', [CategoryController::class, 'index'])->name('admincategories');
        // create
        Route::get('/categories/create', [CategoryController::class, 'create'])->name('admin-create-category');
        Route::post('/categories/store', [CategoryController::class, 'store'])->name('admin-store-category');
        // update
        Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('admin-edit-category');
        Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('admin-update-category');
        // delete
        Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('admin-delete-category');

        // article side
        // show
        Route::get('/articles', [ArticleController::class, 'index'])->name('adminarticles');
        // create
        Route::get('/articles/create', [ArticleController::class, 'create'])->name('admin-create-article');
        Route::post('/articles/store', [ArticleController::class, 'store'])->name('admin-store-article');
        // // update
        Route::get('/articles/{article}/edit', [ArticleController::class, 'edit'])->name('admin-edit-article');
        Route::put('/articles/{article}', [ArticleController::class, 'update'])->name('admin-update-article');
        // // // delete
        Route::delete('/articles/{article}', [ArticleController::class, 'destroy'])->name('admin-delete-article');

        //""""order side""""//
        // show
        Route::get('/orders', [OrderController::class, 'index'])
            ->name('adminorders');
        // watch detail
        Route::get('/orders/{order}', [OrderController::class, 'show'])
            ->name('admin-watch-order');
        // update status
        Route::put('/orders/{order}/status', [OrderController::class, 'updateStatus'])
            ->name('admin-order-status');

        //""""users side""""//
        //index
        Route::get('/users', [UserController::class, 'index'])->name('adminusers');
        //create
        Route::get('/users/create', [UserController::class, 'create'])->name('admin-create-user');
        Route::post('/users/store', [UserController::class, 'store'])->name('admin-store-user');

        //show
        Route::get('/users/{user}', [UserController::class, 'show'])->name('admin-watch-user');
        //update
        Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('admin-edit-user');
        Route::put('/users/{user}', [UserController::class, 'update'])->name('admin-update-user');
        //delete
        Route::delete('/users/{user}/delete', [UserController::class, 'destroy'])->name('admin-destroy-user');
    });

//""""AUTH""""//
Route::middleware('guest')->group(function () {
    //REGISTER
    Route::get('/register', [AuthController::class, 'showRegister'])->name('show-register');
    Route::post('/register', [AuthController::class, 'register'])->name('register');
    //login
    Route::get('/login', [AuthController::class, 'showLogin'])->name('show-login');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    //forget-password
    //show forget password page
    Route::get('/forget-password', [AuthController::class, 'showForgetPassword'])->name('show-forgetpassword');
    // send email 
    Route::post('/forget-password', [AuthController::class, 'sendResetLink'])->name('password.email');
    //show link page that went with email
    Route::get('/reset-password/{token}', [AuthController::class, 'showResetPassword'])
        ->name('password.reset');
    Route::post('/reset-password', [AuthController::class, 'resetPassword'])
        ->name('password.update');
    //change password
});
Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');
