<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use app\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('fiturlogin.register',
        [
            'title' => 'Register',
            'active' => 'Login'
        ]);
    }

    public function store(Request $request)
    {
       $validatedData = $request->validate([
           'name' => 'required|max:50',
           'username' => ['required', 'min:5', 'max:250', 'unique:users'],
           'email'=> 'required|email:dns|unique:users',
           'password'=> 'required|min:5|max:250|unique:user'
       ]);
       user::create($validatedData);
    }
}
