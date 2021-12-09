<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\Shoppingcart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    private Shoppingcart $model;
    public function __construct()
    {
        $this->model = new Shoppingcart();
    }
    public function buy(int $id)
    {
        $this->model->buy($id);

        return redirect(route("shop"));

    }
}
