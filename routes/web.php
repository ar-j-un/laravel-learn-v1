<?php

use Illuminate\Support\Facades\Route;

Route::view('/','home',['greeting' => 'Hello','person' => request('person','Guest'),]);
Route::view('/signin','signin');
Route::view('/about','aboutus');

/*Route::get('/', function () {
    return view('welcome');
});

Route::get('/signin', function () {
    return view('signin');
});

Route::view('/about','aboutus');

Route::get('/contact', function () {
    return '+91942345<a href="/">Return Home</a>';
});*/

Route::get('/contact', function () {
    return "
        <title>Contact Us</title>
        <a href='/'>Home</a>
        <a href='/signin'>Sign in</a>
        <a href='/about'>About Us</a>s
        <a href='/contact'>Contact Us</a>
        <h1>Contact Us</h1>
        <p>+91 942345</p>
    ";
});