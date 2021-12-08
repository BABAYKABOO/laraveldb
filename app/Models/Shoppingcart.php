<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shoppingcart extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'order_id',
        'user_id',
        'product_id',
        'count'
    ];

    public function product()
    {
        $this->hasMany(Product::class);
    }
    public function order()
    {
        $this->hasMany(Order::class);
    }
}
