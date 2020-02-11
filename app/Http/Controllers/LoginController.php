<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function create()
    {
        return view('users.login');
    }
    public function store()
        {
        if (auth()->attempt(request(['email', 'password'])
        )){

            return redirect('/');
        }

            return back()->withErrors([
                'message' => 'Password or email is not correct.'
            ]);
    }
    public function destroy()
    {
        Auth::logout();
        
        return redirect('/login');
    }

}
