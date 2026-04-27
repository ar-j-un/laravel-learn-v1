<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Models\Signin;

use function PHPUnit\Framework\isNull;

Route::view('/','home',['greeting' => 'Hello','person' => request('person','Guest'),]);

//Route::view('/signin','signin');

Route::view('/about','aboutus');

Route::view('/functions','functions',['options' => ['add','commit','push']]);

//index
Route::get('/signin', function (){
    $names=Signin::all();
    return view('signin.index',['names' => $names,]);
});

//show
Route::get('/signin/{signinId}', function (Signin $signinId){
    return view('signin.show',['signinId' => $signinId,]);
});

//edit
Route::get('/signin/{signinId}/change', function (Signin $signinId){
    return view('signin.change',['signinId' => $signinId,]);
});

//update
Route::patch('/signin/{signinId}', function (Signin $signinId){
    $signinId->update([
        'username' => request('username')
    ]);
    return redirect("/signin/{$signinId->id}");
});

//store
Route::post('/signin', function () {
    Signin::create(['username'=>request('name')]);
    return redirect('/signin');
    });

//destroy
Route::delete('/signin/{signinId}', function (Signin $signinId) {
    $signinId->delete();
    return redirect('/signin');
    });

Route::get('/delete-logins',function (){
    Signin::truncate(); 
    return redirect('/signin');
});

/*Route::get('/signin/{id}', function ($id){
    $name=Signin::findOrFail($id);
    return view('signin.show',['name' => $name,]);
});*/


/*Route::get('/signin', function (){
    $names=Signin::all();
    //$names= DB::table('signins')->get(); 
    //return $names[0]->username;
    return view('signin',['names' => $names,]);
});

Route::post('/signin', function () {
    Signin::create(['username'=>request('name')]);
    return redirect('/signin');
    });*/


//Route::get('/signin', function () {
    //return view('signin');
//});

/*Route::post('/signin', function (Request $request) {
    $email = $request->input('email');
    $password = $request->input('password');

    if ($email === 'admin@example.com' && $password === '1234') {
        return "Login successful";
    } else {
        return back()->with('error', 'Invalid credentials');
    }
});*/


/*Route::get('/signin', function (){
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
});*/


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
        <a href='/about'>About Us</a>
        <a href='/contact'>Contact Us</a>
        <h1>Contact Us</h1>
        <p>+91 942345</p>
    ";
});