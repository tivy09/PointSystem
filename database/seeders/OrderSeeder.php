<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $order = [
            [
                'id'=>1,
                'total'=>150,
            ],
            [
                'id'=>2,
                'total'=>1000,
            ],
            [
                'id'=>3,
                'total'=>250,
            ],
            [
                'id'=>4,
                'total'=>3000,
            ],[
                'id'=>5,
                'total'=>4500,
            ],
        ];
        Order::insert($order);
    }
}
