<?php

namespace Tests\Unit;

use App\Models\Shoppingcart;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{
    public function test_user()
    {
        $dbUser = \App\Models\User::first();
        $this->assertNotNull($dbUser);
    }
    public function test_order()
    {
        \App\Models\Order::factory(10);
        $dbOrder = \App\Models\Order::first();

        $this->assertNotNull($dbOrder);
        $this->assertNull(\App\Models\Order::HasUser()->first());
    }

    public function test_product()
    {
        \App\Models\Product::factory(15);
        $dbProduct = \App\Models\Product::first();

        $this->assertNotNull($dbProduct);
    }

    public function test_cart()
    {
        \App\Models\Shoppingcart::factory(20);
        $dbCart = \App\Models\Shoppingcart::first();

        $this->assertNotNull($dbCart);
        $this->assertNotNull(Shoppingcart::HasProduct());

    }
}
