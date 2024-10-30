<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;

class AuthController extends Controller
{
    public function login()
    {
        return view('loginPage');
    }

    public function connecter(LoginRequest $request)
    {
        $credentials = $request->validate();

        Auth
    }
}
