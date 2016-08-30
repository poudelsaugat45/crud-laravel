<?php



Route::get('/', function () {
    return view('auth.login');
});

Route::resource('crud', 'crudController');
Auth::routes();

Route::get('/home', 'crudController@index');
