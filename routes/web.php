<?php


Route::get('/', 'FrontController@homepage')->name('homepage');
Route::get('/products', 'FrontController@product')->name('products');


//*** Auth Routes are Following ****
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//*** Admin Routes are Following ****
Route::get('/admin/dashboard', 'FrontController@dashboard')->name('dashboard');
Route::get('/admin/products', 'admin\ProductController@index')->name('product.all');
Route::get('/admin/product/create', 'admin\ProductController@create')->name('product.create');
Route::post('/admin/product/store', 'admin\ProductController@store')->name('product.store');