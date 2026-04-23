<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::view('/','home',['greeting' => 'Hello','person' => request('person','Guest'),]);

//Route::view('/signin','signin');

Route::view('/about','aboutus');

Route::view('/functions','functions',['options' => ['add','commit','push']]);

Route::get('/signin', function (){
    $names=session()->get('names',[]); 
    return view('signin',['names' => $names,]);
});

Route::post('/signin', function () {
    //dd(request()->all());
    $name = request('name');
    session()->push('names',$name);
    return redirect('/signin');
    });

Route::get('/delete-logins',function (){
    session()->forget('names');
    return redirect('/signin');
});


/*Route::get('/', function () {
    return view('welcome');
});

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