<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@getHomePage')->name('home');

Route::get('/goods', 'GoodController@getGoods')->name('goods');


// HomeController@getHomePage