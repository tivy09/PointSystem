<?php

namespace Database\Seeders;

use App\Models\RedeemConditionSetting;
use Illuminate\Database\Seeder;

class PointRedeemConditionSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $condition = [
            [
                'id'=>1,
                'type_id'=>1,
                'min_point_to_redeem'=>10,
            ],
            [
                'id'=>2,
                'type_id'=>2,
                'min_point_to_redeem'=>20,
            ],
        ];
        RedeemConditionSetting::insert($condition);
    }
}
