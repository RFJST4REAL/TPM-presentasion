<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class LoginController extends Controller
{
    public function index()
    {
        return view('fiturlogin.login',
        [
            'title' => 'Login',
            'active' => 'Login'
        ]);
    }
}
