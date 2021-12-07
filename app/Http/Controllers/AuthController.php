<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view("auth.login");
    }

    public function showRegisterForm()
    {
        return view("auth.register");
    }

    public function logout()
    {
        auth('web')->logout();

        return redirect(route('home'));
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            "user_name" => ['required', 'string'],
            "password" => ['required']
        ]);
        if(auth('web')->attempt($data))
        {
            return redirect(route("home"));
        }

         return redirect(route("login"))->withErrors(['user_name' => "User didn't find"]);
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            "name" => ['required', 'string'],
            "password" => ['required', 'confirmed']
        ]);


        $user = User::create([
            "user_name" => $data['name'],
            "user_password" => bcrypt($data['password']),
        ]);


        if ($user){
            auth()->login($user);
        }

        return redirect(route("home"));
    }
}
