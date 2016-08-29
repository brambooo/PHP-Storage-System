<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| This is the new location of the routes for Laravel 5.3!!!
|
*/

// Customer routes
Route::get('/', 'CustomersController@index');
Route::get('customers', 'CustomersController@index');
Route::get('customers/{customer}', 'customer@show');
Route::get('customers/add', 'customer@add');