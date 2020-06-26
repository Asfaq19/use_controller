<?php


Route::view('/','welcome');
Route::view('about','about');
Route::view('contact','contact');

Route::get('customers','CustomersController@index');
Route::get('customers/create','CustomersController@create');
Route::post('customers','CustomersController@store');
Route::get('customers/{customer}','CustomersController@show');
Route::get('customers/{customer}/edit','CustomersController@edit');
Route::patch('customers/{customer}','CustomersController@update');
Route::delete('customers/{customer}','CustomersController@destroy');

// Route::resource('customers','CustomersController');