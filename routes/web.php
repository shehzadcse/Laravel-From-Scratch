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
})->name('main');


Route::get('products', function () {
    return 'This is the list of products';
})->name('products.index');

Route::get('products/create', function () {
    return 'A form to create the product';
})->name('products.create');

Route::post('products', function () {
    // POST LOGIC COMES HERE
})->name('products.store');
