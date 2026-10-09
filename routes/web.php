<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/accommodations', function () {
    return "List of all accommodations in Bindura";
});