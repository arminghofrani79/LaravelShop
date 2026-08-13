<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/products', function () {
    return view('products');
});
Route::get('/product/1', function () {
    return view('product');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/profile', function () {
    return view('profile/profile');
});
Route::get('/profile/order', function () {
    return view('profile/order');
});
Route::get('/profile/address', function () {
    return view('profile/address');
});
Route::get('/articles', function () {
    return view('article/index');
});
Route::get('/article', function () {
    return view('article/article');
});
Route::get('/contact', function () {
    return view('contact');
});
