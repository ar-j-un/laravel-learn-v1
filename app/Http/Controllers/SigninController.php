<?php

namespace App\Http\Controllers;
    use App\Models\Signin;
    use Auth;
    use Hash;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades;
    use Redirect;

    //use App\Http\Controllers\Auth;

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
            $request->validate([
                'name' => ['required','min:4','unique:signins,username','max:255'],
                'password'=> ['required','min:6','max:255']
                ]);

                $user = Signin::create([
                                'username'=> $request-> name,
                                'password'=> Hash::make($request->password)
                                        ]);

                Auth::login($user);

                return redirect('/');
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
        return redirect("/signin");
        }

        /**
         * Remove the specified resource from storage.
         */
        public function destroy(Signin $signinDetails)
        {
            $signinDetails->delete();
            return redirect('/signin');
        }

        public function signout()
        {
            Auth::logout();
            return redirect('/signin');
        }

        public function signin(Signin $signinDetails)
        {
            return view('signin.signin',['signinDetails' => $signinDetails]);
        }

        public function signinSession(Request $request, Signin $signinDetails)
        {
            $request->validate([
                   'password' => ['required','min:6','max:255']
                    ]);

            // Check password manually
            if (Hash::check($request->password, $signinDetails->password)) {
        
                Auth::login($signinDetails); // login THIS specific user
        
                $request->session()->regenerate();

                return redirect('/');
            }

            return back()->withErrors([
                'password' => 'The provided credentials do not match our records'
                ]);
        }

        /*public function signinSession(Request $request)
        {
            $validated = $request->validate([
                    'password' => ['required','min:6','max:255']
            ]);

            if(Auth::attempt($validated)){
                $request->session()->regenerate();
                return redirect('/');
            }
            return back()->withErrors([
                    'password' => 'The provided credentials do not match our records'
            ]);
        }*/

    }
