<?php

namespace App\Http\Controllers;

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
            // Connexion réussie
            return view('adminDashboard');
        } else {
            // Connexion échouée, rediriger avec un message d'erreur
            return back()->withErrors([
                'email' => 'Les identifiants ne correspondent pas.'
            ]);
        }
    }

}
