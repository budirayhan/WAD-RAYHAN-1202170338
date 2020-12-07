<?php
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/insertproduct', function () {
    return view('insertproduct');
});

Route::get('/inputproduct', function () {
    return view('inputproduct');
});

Route::get('/order', function () {
    return view('order');
});