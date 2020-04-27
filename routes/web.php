<?php


Route::get('/', 'FrontController@homepage')->name('homepage');
Route::get('/products', 'FrontController@product')->name('products');


//*** Auth Routes are Following ****
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//*** Admin Routes are Following ****
Route::get('/admin/dashboard', 'FrontController@dashboard')->name('dashboard');