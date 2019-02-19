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
                'mesage' => 'Wrong email or password...'
            ]);
        }
        return redirect()->route('Teams');
    }
    public function logout(){
        auth()->logout();
        return redirect()->route('login');
    }


}
