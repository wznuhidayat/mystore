<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Auth\Events\Registered;

class Authenticate extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required','email'],
            'password' => ['required']
        ]);
        if(Auth::attempt($request->only('email','password'))){
            return response()->json(Auth::user(),200);
        }
        throw ValidationException::withMessages([
            'email' => ['the provide credentials are incorrect.']
        ]);
    }
    public function register(Request $request)
    {
        $request->validate([
            'username' => ['required','unique:users','min:6'],
            'email' => ['required','email','unique:users'],
            'password' => ['required','min:8']
        ]);

        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        event(new Registered($user));

        Auth::login($user);
        return response()->json(Auth::user(),200);
    }
    public function logout()
    {
        Auth::logout();
    }
}
