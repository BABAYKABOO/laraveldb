<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class User extends Authenticatable
{
    use HasFactory;

    protected $primaryKey = 'user_id';

    protected $maps =[
        'name' => 'user_name',
        'password' => 'user_password'
    ];
    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'user_name',
        'user_password'

    ];

    public function loginUser(Request $request) : bool
    {
        $data = $request->validate([
            "user_name" => ['required', 'string'],
            "password" => ['required']
        ]);
        if(auth('web')->attempt($data))
            return true;


        return false;
    }

    public function registerUser(Request $request) : User
    {
        $data = $request->validate([
            "name" => ['required', 'string', 'unique'],
            "password" => ['required', 'confirmed']
        ]);

        return User::create([
            "user_name" => $data['name'],
            "user_password" => bcrypt($data['password']),
        ]);

    }
}
