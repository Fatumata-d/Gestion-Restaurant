<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        User::create([
            'name' 
        ]);

        return view('adminDashboard');
    }
}
