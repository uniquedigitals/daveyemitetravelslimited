<?php


namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required|string|min:6',
    ]);

    // Attempt to log the user in
    $credentials = $request->only('email', 'password');
    $remember = $request->has('remember');

    if (Auth::attempt($credentials, $remember)) {
        // If authentication passes, redirect to the dashboard route
       return view('admin.index');
    }

    // If authentication fails, redirect back with an error message
    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ])->withInput($request->only('email'));
}
}
