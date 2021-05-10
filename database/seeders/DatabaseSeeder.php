<?php

namespace Database\Seeders;

use App\Models\Point;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            PermissionsTableSeeder::class,
            RolesTableSeeder::class,
            PermissionRoleTableSeeder::class,
            UsersTableSeeder::class,
            RoleUserTableSeeder::class,
            PointSettingSeeder::class,
            PointRedeemTypeSeeder::class,
            PointRedeemConditionSettingSeeder::class,
            PrizeSeeder::class,
            OrderSeeder::class,
        ]);
    }
}
