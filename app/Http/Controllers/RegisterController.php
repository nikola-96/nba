<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware;
use App\Mail\VerifiedMail;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function create()
    {
        return view('users.register');
    }

    public function store()
    {
        $this->validate(request(),[
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6'
        ]);
        $user = new \App\User;
        $user->name = request('name');
        $user->email = request('email');
        $user->password = bcrypt(request('password'));
        $user->save();

       Mail::to($user->email)->send(new VerifiedMail($user));

        return redirect('/login');

    }
    public function verified($id)
    {
        $user = \App\User::find($id);
        $user->is_verified = 1;
        $user->save();
        auth()->login($user);

        return redirect('/login');
    }

}
