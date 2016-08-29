<?php



Route::get('/', function () {
    return view('crudapp.create');
});

Route::resource('crud', 'crudController');