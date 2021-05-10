<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PointRedeemType;
class PointRedeemTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type = [
            [
                'id'=>1,
                'type'=>'Prize',
            ],
            [
                'id'=>2,
                'type'=>'Voucher',
            ],
        ];
        PointRedeemType::insert($type);
    }
}
