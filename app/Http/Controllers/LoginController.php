<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware;
use Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('destroy');
    }

    public function create()
    {
        return view('users.login');
    }
    public function store()
    {//ovde moram odrditi validaciju da ako korisnin ne unese nista dobije odgovarajucu poruku ubbaciti if sa promenjivom
        $user = \App\User::where('email',request('email'))->first();
        if($user->is_verified){
            if (auth()->attempt(request(['email', 'password'])
            )){

                return redirect('/');
            }
        }else{

            return back()->withErrors([
                'message' => 'Please check your email and verified your profile.'
            ]);
        }
                return back()->withErrors([
                    'message' => 'Password or email is not correct.'
                ]);
    }
    public function destroy()
    {
        auth()->logout();
        
        return redirect('/login');
    }

}
