<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

Route::get('/', 'GoodController@getGoodPage')->name('goods');

Route::get('/addgood', 'GoodController@addGoodView')->name('addGoodView');

Route::post('/addgood', 'GoodController@addGood')->name('addGood');

Route::get('/support', 'SupportController@getSupportPage')->name('support');

Route::get('/cart', 'CartController@getCartPage')->name('cart');

Route::post('/add-to-cart/{id}', 'CartController@addGoodCart')->name('add-to-cart');

Route::post('/deletegood', 'GoodController@deleteGood')->name('deleteGood');