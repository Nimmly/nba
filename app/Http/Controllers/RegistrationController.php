<?php

namespace App\Http\Controllers;

use App\User;
use App\Mail\Verification;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }
    public function create()
    {
        return view('register.create');
    }
    public function store()
    {
        $this->validate(request(),[
            'name'=>'required',
            'email'=>'required',
            'password'=>'required|confirmed'
        ]);

        $user = new User();
        $user->name = request('name');
        $user->email = request('email');
        $user->password = bcrypt(request('password'));
        $user->save();

        \Mail::to($user)->send( new Verification($user) );

        //auth()->login($user);
        return redirect('/login');
    }
}
