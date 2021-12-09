<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\Shoppingcart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    private Order $model;
    public function __construct()
    {
        $this->model = new Order();
    }
    public function index()
    {
        if (auth('web')->check() == 0)
            return view("auth.login");

        return view('cart', $this->model->getOrder());
    }
}
