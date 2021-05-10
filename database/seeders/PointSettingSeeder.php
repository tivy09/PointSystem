<?php

namespace Database\Seeders;

use App\Models\PointSetting;
use Illuminate\Database\Seeder;

class PointSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pointSetting = [
            'id'=>1,
            'exchange_rate'=>0.25,
            'earn_amount'=>25,
            'enable'=>1,
            'display'=>1,
            'point_period'=>30,
            'point_status'=>1,
            'point_activate_period'=>5,
            'point_activate_date'=>now(),
        ];
        PointSetting::insert($pointSetting);
    }
}
