<?php

namespace App\Http\Controllers;

use session;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function login()
    {
        return view('loginPage');
    }

    public function connecter(LoginRequest $request)
    {
        $credentials = $request->validated();

        if (Auth::attempt($credentials)) {
            return view('adminDashboard');
        } else {

            return back()->withErrors([
                'email' => 'Les identifiants ne correspondent pas.'
            ]);
        }
    }

    public function deconnecter(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }

}
