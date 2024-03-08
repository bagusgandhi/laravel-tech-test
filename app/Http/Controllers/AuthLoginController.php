<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthLoginController extends Controller
{
    public function showLoginForm(){
        return view('pages.auth.login');
    }

    public function authenticate(Request $request)
    {

        // return back()->with('loginError','Login Failed!');
        $request->validate([
            'email'=>'required|email:dns',
        	'password' => 'required|min:8',
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        $remember = $request->has('remember');

        if(Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();
            return redirect()->guest(route('home'));
        }
        return back()->with('loginError','Login Failed!');
    }
}
