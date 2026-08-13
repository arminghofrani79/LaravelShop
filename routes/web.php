<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('index');
Route::get('/products', function () {
    return view('products');
})->name('products');
Route::get('/product/1', function () {
    return view('product');
});
Route::get('/cart', function () {
    return view('cart');
})->name('cart');
Route::get('/profile', function () {
    return view('profile/profile');
})->name('profile');
Route::get('/profile/order', function () {
    return view('profile/order');
});
Route::get('/profile/address', function () {
    return view('profile/address');
})->name('address');
Route::get('/articles', function () {
    return view('article/index');
})->name('articles');
Route::get('/article', function () {
    return view('article/article');
})->name('article');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
//////////// admin panel ////////////
//""""main side""""//
Route::get('/adminpanel', function () {
    return view('admin/index');
})->name('adminindex');

//""""product side""""//
Route::get('/adminpanel/products', function () {
    return view('admin/product/index');
})->name('adminproducts');
Route::get('/adminpanel/products/create', function () {
    return view('admin/product/create');
})->name('admin-create-product');
Route::get('/adminpanel/products/edit', function () {
    return view('admin/product/edit');
})->name('admin-edit-product');

//""""category side""""//
Route::get('/adminpanel/categories', function () {
    return view('admin/category/index');
})->name('admincategories');
Route::get('/adminpanel/categories/create', function () {
    return view('admin/category/create');
})->name('admin-create-category');
Route::get('/adminpanel/categories/edit', function () {
    return view('admin/category/edit');
})->name('admin-edit-category');

//""""order side""""//
Route::get('/adminpanel/orders', function () {
    return view('admin/order/index');
})->name('adminorders');
Route::get('/adminpanel/orders/watch', function () {
    return view('admin/order/watch');
})->name('admin-watch-order');

//""""product side""""//
Route::get('/adminpanel/articles', function () {
    return view('admin/article/index');
})->name('adminarticles');
Route::get('/adminpanel/articles/create', function () {
    return view('admin/article/create');
})->name('admin-create-article');
Route::get('/adminpanel/articles/edit', function () {
    return view('admin/article/edit');
})->name('admin-edit-article');


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
