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
Route::get('customers/{customer}', 'CustomersController@show');


Route::get('customers/edit/{customer}', 'CustomersController@edit');
Route::patch('customers/update/{customer}', 'CustomersController@update'); // Is used to update itself; patch update partial resources, patch is often better then putting because it costs more bandwidth.


Route::post('customers/add', 'CustomersController@add');
Route::delete('customers/{customer}', 'CustomersController@delete');