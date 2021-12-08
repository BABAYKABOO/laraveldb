<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Order extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'order_id',
        'user_id'
    ];

    static public function order_id()
    {
        $user_id = Auth::user()->user_id;
        $order_id = Order::select()->where('user_id', $user_id)->get();
        if (isset($order_id[0]->order_id))
        {
            Order::create([
                "user_id" => $user_id
            ]);
            $order_id = Order::select()->where('user_id', $user_id)->get();
        }
        return $order_id[0]->order_id;
    }

    public function cart()
    {
        $this->belongsTo(Shoppingcart::class);
    }
    public function user()
    {
        $this->hasMany(User::class);
    }
}
