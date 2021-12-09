<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    private User $model;
    public function __construct()
    {
        $this->model = new User();
    }

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
        if($this->model->loginUser($request))
            return redirect(route("home"));

         return redirect(route("login"))->withErrors(['user_name' => "User didn't find"]);
    }

    public function register(Request $request)
    {
        $user = $this->model->registerUser($request);
        if ($user)
            auth()->login($user);

        return redirect(route("home"));
    }
}
