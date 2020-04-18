<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@getHomePage')->name('home');

Route::get('/goods', 'GoodController@getGoodPage')->name('goods');

Route::get('/support', 'SupportController@getSupportPage')->name('support');