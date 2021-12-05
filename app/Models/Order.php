<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [

    ];

    public function cart()
    {
        $this->belongsTo(Shoppingcart::class);
    }
    public function user()
    {
        $this->hasMany(User::class);
    }
}
