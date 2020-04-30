<?php


Route::get('/', 'FrontController@homepage')->name('homepage');
Route::get('/products', 'FrontController@product')->name('products');
Route::get('/products/{slug}', 'FrontController@singleProduct')->name('product.show');
Route::get('/search/', 'FrontController@search')->name('product.search');


//*** Auth Routes are Following ****
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//*** Admin Routes are Following ****
Route::get('/admin/dashboard', 'FrontController@dashboard')->name('dashboard');
Route::get('/admin/products', 'admin\ProductController@index')->name('product.all');
Route::get('/admin/product/make', 'admin\ProductController@make')->name('product.make');
Route::post('/admin/product/store', 'admin\ProductController@store')->name('product.store');
Route::get('/admin/product/edit/{id}', 'admin\ProductController@edit')->name('product.edit');
Route::post('/admin/product/update/{id}', 'admin\ProductController@update')->name('product.update');
Route::delete('/admin/product/destroy/{id}', 'admin\ProductController@destroy')->name('product.destroy');

Route::resource('/admin/category', 'admin\CategoryController');
Route::resource('/admin/brand', 'admin\BrandController');