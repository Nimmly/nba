<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest',['except'=>'destroy']);
    }
    public function create()
    {
        return view('login.create');
    }
    public function store()
    {
        if( !auth()->attempt(
            request(['email', 'password'])
        )){
            return redirect('/login');
        }
        return redirect('/');
    }
    public function destroy()
    {
        auth()->logout();
        return redirect('/login');
    }
}
