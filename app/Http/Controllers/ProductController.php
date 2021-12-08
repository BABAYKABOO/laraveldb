<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\Shoppingcart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
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

        return redirect(route("shop"));

    }
}
