<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;

class Authten extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function registerStore(Request $request)
    {
       DB::table('users')->insert([
           'name' => $request->name,
           'password' => Hash::make($request->password),
           'status' => $request->status
       ]);

        return redirect('/login');
    }


    public function login() {
        return view('login');
    }

    public function loginStore(Request $request) {
        if (Auth::attempt(['name' => $request->name, 'password' => $request->password])) {
            return redirect('/');
        } else {
            return redirect('/login');
        }
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate(); 

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
