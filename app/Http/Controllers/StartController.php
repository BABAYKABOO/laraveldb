<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\Shoppingcart;
use App\Models\User;
use Illuminate\Http\Request;

class StartController extends Controller
{
    public function index()
    {
        $users = User::with('orders')->get();
        return view('index', ['users' => $users]);
    }
    public function orders()
    {
        $orders = Order::with('user')->get();
        dd($orders);
    }
    public function cart()
    {
        $cart = Shoppingcart::with('cart_order')->get();
        dd($cart);
    }
    public function product()
    {
        $product = Product::with('product')->get();
        dd($product);
    }
}
