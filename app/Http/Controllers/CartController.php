<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\Shoppingcart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function index()
    {
        if (auth('web')->check() == 0)
            return view("auth.login");

        $order_id = Order::order_id();
        $cart = Shoppingcart::select()->where('order_id', $order_id)->get();
        $products = Product::get();
        return view('cart', [
            'products' => $products,
            'cart' => $cart

        ]);
    }
}
