<?php
/**
 * Created by PhpStorm.
 * User: Bram
 * Date: 23-8-2016
 * Time: 15:52
 */

Route::get('/', 'homeController@index');
Route::get('customers/{customer}', 'customer@show');
Route::get('customers/add', 'customer@add');