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

    public function buy(int $id)
    {
        $order_id = Order::order_id();
        $cart = Shoppingcart::select()->where('order_id', $order_id)->where('product_id', $id)->get();

        if (isset($cart[0]->order_id))
        {
            $count = Shoppingcart::select()->where('order_id', $order_id)->get();
            Shoppingcart::select()->where('order_id', $order_id)->where('product_id', $id)->update(['count' => $count[0]->count+1]);
        }
        else {
            $cart = Shoppingcart::create([
                "order_id" => $order_id,
                "product_id" => $id,
                "count" => 1
            ]);
        }
    }

    public function product()
    {
        $this->hasMany(Product::class);
    }
    public function order()
    {
        $this->hasMany(Order::class);
    }
}
