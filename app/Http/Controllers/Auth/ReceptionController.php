<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ReceptionController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),

            'mask' => $number = random_int(100000000, 999999999),
        ]);

        Auth::login($user);

        return redirect('/dashboard');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function verifyLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            return redirect('/dashboard');
        } else {
            return redirect()->back()->withErrors(['email' => 'Invalid Username or Password.']);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        return redirect('/');
    }
}
