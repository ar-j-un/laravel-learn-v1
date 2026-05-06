<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Signin;
use Illuminate\Support\Facades;
//use Illuminate\Support\Facades\Auth;
use Auth;
use Hash;

class SessionsController extends Controller
{

    /**
     * Show the form for creating a new resource.
     */
    public function create(Signin $signinDetails)
    {
        return view('signin.signin',['signinDetails' => $signinDetails]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

      /**
     * Remove the specified resource from storage.
     */
    public function destroy(Signin $signinDetails)
    {
        Auth::logout();
        return redirect('/');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

}
