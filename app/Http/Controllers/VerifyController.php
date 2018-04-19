<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class VerifyController extends Controller
{
    public function store($user_id)
    {
        $user = User::find($user_id);
        if($user->is_verified = false)
        {
            $user->is_verified = true;
            $user->save();
            return redirect('login');
        }
        return redirect('/login');
    }
}