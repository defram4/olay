<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Seeder;


class ProductOrderSeeder extends Seeder
{


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::factory(10)->create()->each(function ($u) {
            $u->products()->sync([rand(1, 3) => ['qty' => rand(2, 8), 'price' => 100]]);
        });
    }
}
