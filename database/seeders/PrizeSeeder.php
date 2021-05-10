<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Prize;
class PrizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prize = [
            [
                'id'=>1,
                'name'=>'Prize 1',
                'quantity'=>100,
                'point_to_redeem'=>10,
            ],
            [
                'id'=>2,
                'name'=>'Prize 2',
                'quantity'=>50,
                'point_to_redeem'=>20,
            ],[
                'id'=>3,
                'name'=>'Prize 3',
                'quantity'=>200,
                'point_to_redeem'=>5,
            ],
        ];
        Prize::insert($prize);
    }
}
