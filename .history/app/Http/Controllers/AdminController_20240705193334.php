<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@sosushi.sn',
            'password' => Hash::make('M@ya2708')
        ]);

        return view('adminDashboard');
    }
}
