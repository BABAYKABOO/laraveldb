<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $a = \App\Models\User::factory(10)->create();
        \App\Models\Order::factory(10)->create([$a]);
        \App\Models\Product::factory(10);
        \App\Models\Shoppingcart::factory(10);
    }
}
