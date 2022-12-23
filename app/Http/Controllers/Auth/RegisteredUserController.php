<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules;
use Illuminate\Http\Request;
use App\Models\User;

class RegisteredUserController extends Controller
{
    //
    public function store(Request $request){
        $request->validate([
            'name' => ['required','string','max:255'],
            'email' => ['required','string','email','max:255','unique:users'],
            'password' => ['required','confirmed',Rules\Password::defaults()]
        ]);

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'avatar' => ''
        ]);

        
        // Auto login
        // Auth::login($user);
        // Manual login
        return to_route('login')->with('status','Account created!');
    }
}
