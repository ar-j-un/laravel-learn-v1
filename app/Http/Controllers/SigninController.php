<?php

namespace App\Http\Controllers;

use App\Models\Signin;
use Illuminate\Http\Request;

class SigninController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $names=Signin::all();
        return view('signin.index',['names' => $names,]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('signin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Signin::create(['username'=>request('name')]);
        return redirect('/signin');
    }

    /**
     * Display the specified resource.
     */
    public function show(Signin $signinDetails)
    {
        return view('signin.show',['signinDetails' => $signinDetails,]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Signin $signinDetails)
    {
        return view('signin.change',['signinDetails' => $signinDetails,]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Signin $signinDetails)
    {
        $signinDetails->update([
        'username' => request('username')
    ]);
    return redirect("/signin/{$signinDetails->id}");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Signin $signinDetails)
    {
        $signinDetails->delete();
        return redirect('/signin');
    }
}
