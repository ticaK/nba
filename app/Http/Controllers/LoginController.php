<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{
    public function create(){
        return view ('auth.login');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if (!auth()->attempt($request->only(['email', 'password']))) {
            return back()->withErrors([
                'message' => 'Wrong email or password...'
            ]);

        } else if (auth()->user()->is_verified) {
            return redirect()->route('Teams');

        } else {
            return back()->withErrors([
                'message' => 'You are NOT VERIFIED!'
            ]);
        }

    }
    public function logout(){
        auth()->logout();
        return redirect()->route('login');
    }


}
