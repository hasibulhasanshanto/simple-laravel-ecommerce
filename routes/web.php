<?php


Route::get('/', 'FrontController@homepage')->name('homepage');
Route::get('/products', 'FrontController@product')->name('products');
Route::get('/products/{slug}', 'FrontController@singleProduct')->name('product.show');
Route::get('/search/', 'FrontController@search')->name('product.search');
Route::get('/category/{id}', 'FrontController@categoryShow')->name('product.category');


//*** Auth Routes are Following ****
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//*** Admin Routes are Following ****
Route::group(['prefix'=>'admin'], function(){

    Route::get('/dashboard', 'FrontController@dashboard')->name('dashboard');

    Route::get('/products', 'admin\ProductController@index')->name('product.all');
    Route::get('/product/make', 'admin\ProductController@make')->name('product.make');
    Route::post('/product/store', 'admin\ProductController@store')->name('product.store');
    Route::get('product/edit/{id}', 'admin\ProductController@edit')->name('product.edit');
    Route::post('/product/update/{id}', 'admin\ProductController@update')->name('product.update');
    Route::delete('/product/destroy/{id}', 'admin\ProductController@destroy')->name('product.destroy');

    Route::resource('/category', 'admin\CategoryController');
    Route::resource('/brand', 'admin\BrandController');

});