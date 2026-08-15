<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('index');

//////////// product ////////////
Route::get('/products', function () {
    return view('products');
})->name('products');
Route::get('/product/1', function () {
    return view('product');
});

////////////cart ////////////
Route::get('/cart', function () {
    return view('cart');
})->name('cart');

//////////// article ////////////
Route::get('/articles', function () {
    return view('article/index');
})->name('articles');
Route::get('/article', function () {
    return view('article/article');
})->name('article');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

//////////// user panel ////////////
//""""main side""""//
Route::get('/profile', function () {
    return view('profile/profile');
})->name('user-profile');

Route::get('/profile/edit', function () {
    return view('profile/profile-edit');
})->name('user-edit-profile');

//""""order side""""//
Route::get('/profile/order', function () {
    return view('profile/order');
})->name('user-order');
Route::get('/profile/order/1', function () {
    return view('profile/order-watch');
})->name('user-watch-order');

//""""address side""""//
Route::get('/profile/address', function () {
    return view('profile/address');
})->name('user-address');
Route::get('/profile/address/create', function () {
    return view('profile/address-create');
})->name('user-create-address');
Route::get('/profile/address/1', function () {
    return view('profile/address-edit');
})->name('user-edit-address');

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
Route::get('/adminpanel/articles', function () {
    return view('admin/article/edit');
})->name('adminarticles');
//create
Route::get('/adminpanel/articles/create', function () {
    return view('admin/article/edit');
})->name('admin-create-article');
//edit
Route::get('/adminpanel/articles/edit', function () {
    return view('admin/article/edit');
})->name('admin-edit-article');
// delete


//""""order side""""//
Route::get('/adminpanel/orders', function () {
    return view('admin/order/index');
})->name('adminorders');
Route::get('/adminpanel/orders/watch', function () {
    return view('admin/order/watch');
})->name('admin-watch-order');


//""""users side""""//
Route::get('/adminpanel/users', function () {
    return view('admin/user/index');
})->name('adminusers');
Route::get('/adminpanel/users/create', function () {
    return view('admin/user/create');
})->name('admin-create-user');
Route::get('/adminpanel/users/watch', function () {
    return view('admin/user/watch');
})->name('admin-watch-user');
