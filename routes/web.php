<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'Controller@getOrders')->name('home');

Route::get('/kategorija/kompiuteriai', 'Controller@computers');

Route::get('/kategorija/mobilieji-telefonai', 'Controller@mobiles');

Route::get('/prideti-i-krepseli/{id}', 'Controller@addToCart')->name('addtocart');

Route::get('/sumazinti-vienetu/{id}', 'Controller@getReduceByOne')->name('reduceByOne');

Route::get('/pasalinti/{id}', 'Controller@removeItem')->name('remove');

Route::get('/naikinti', 'Controller@removeAll')->name('removeAll');

Route::get('/issaugoti', 'controller@saveOrder')->name('saveOrder');

Route::get('/uzsakymas/{id}', 'Controller@getOrder')->name('getOrder');

Route::get('/krepselis', 'Controller@cart')->name('cart');