<?php
use Illuminate\Http\Request;
use illuminate\support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/register', function () {
    return view('register');
});
