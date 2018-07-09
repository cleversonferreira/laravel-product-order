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

Route::get('/', function () {
    return view('welcome');
});

// Product routes
Route::group(['prefix' => 'produtos'], function(){
    Route::get('/', 'ProductController@index')->name('list.products');
    Route::get('/cadastrar', 'ProductController@create')->name('create.product');
    Route::get('/{id}/editar', 'ProductController@edit')->name('edit.product');
    Route::post('/store', 'ProductController@store')->name('store.product');
    Route::put('/update/{id}', 'ProductController@update')->name('update.product');
    Route::get('/{id}/excluir', 'ProductController@destroy')->name('destroy.product');
});

// Order routes
Route::group(['prefix' => 'pedidos'], function(){
    Route::get('/', 'OrderController@index')->name('list.orders');
    Route::get('/novo', 'OrderController@create')->name('create.order');
    Route::post('/store', 'OrderController@store')->name('store.order');
    Route::get('/{id}/excluir', 'OrderController@destroy')->name('destroy.order');
});