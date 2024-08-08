<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;


class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }
    
    public function store(Request $request)
    {
        //validate
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => ['required', 'confirmed', Password::min(4)->max(10) ],

        ]);

//create the user

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
//Login the user
        Auth::login($user);

        return redirect()->route('dashboard');
    }
}
