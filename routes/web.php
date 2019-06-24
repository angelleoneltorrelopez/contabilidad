<?php



Route::resource('posts', 'Admin\\PostsController');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

//Route::get('/', function () {  return view('app');});

Route::resource('venta', 'Venta\\VentaController');

//Route::resource('compra', 'Compra\\CompraController');

Route::resource('compra', 'Compra\\CompraController');
Route::resource('producto', 'Producto\\ProductoController');
//Route::resource('producto', 'Producto\\ProductoController');
