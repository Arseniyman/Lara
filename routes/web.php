<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

// Route::get('/', 'HomeController@getHomePage')->name('home');

Route::get('/', 'GoodController@getGoodPage')->name('goods');

Route::get('/support', 'SupportController@getSupportPage')->name('support');

Route::get('/basket', 'BasketController@getBasketPage')->name('basket');

Route::post('/add-to-cart/{id}', 'BasketController@addGoodBasket')->name('add-to-cart');