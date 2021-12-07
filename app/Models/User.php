<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        'user_name',
        'user_password'

    ];
}
