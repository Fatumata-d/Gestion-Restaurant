<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Validator;

class AuthController extends Controller
{
    public function login()
    {
        return view('loginPage');
    }

    public function connecter(LoginRequest $request)
    {
        $credentials = $request->validated([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        // Logique de traitement de la connexion
        // Par exemple, authentification avec Laravel's Auth facade
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