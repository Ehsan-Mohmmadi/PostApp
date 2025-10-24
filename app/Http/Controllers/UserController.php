<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $incomingFields = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);
        $incomingFields['password'] = bcrypt($incomingFields['password']);
        $user = User::create($incomingFields);
        auth()->login($user);
        return redirect('/');
    }

    public function login(Request $request,User $user)
    {
        $incomingFields = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (auth()->attempt(['email' => $incomingFields['email'],'password' => $incomingFields['password']]))
        {
            $request->session()->regenerate();
        }
        return redirect('/');
    }

    public function logout(Request $request)
    {
        auth()->logout();
        return redirect('/');
    }
}
