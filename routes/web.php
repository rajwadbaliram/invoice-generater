<?php

use Illuminate\Support\Facades\Route;

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

Route::view('index','index');
Route::post('search','CustomerController@search');
Route::get('Add_customer','CustomerController@Add_customer');
Route::post('store_customer','CustomerController@store_customer');

Route::get('customer_list','CustomerController@show');
Route::get('product_list','ProductController@show');

Route::post('store_product','ProductController@store_product');
Route::get('delete_customer/{id}','CustomerController@destroy');
Route::get('print_invoice/{id}','CustomerController@print');

Route::get('add_product/{id}','ProductController@add_product');
Route::get('delete_product/{id}','ProductController@destroy');
