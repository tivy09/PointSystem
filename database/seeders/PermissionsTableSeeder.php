<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'point_setting_create',
            ],
            [
                'id'    => 18,
                'title' => 'point_setting_edit',
            ],
            [
                'id'    => 19,
                'title' => 'point_setting_show',
            ],
            [
                'id'    => 20,
                'title' => 'point_setting_delete',
            ],
            [
                'id'    => 21,
                'title' => 'point_setting_access',
            ],
            [
                'id'    => 22,
                'title' => 'point_create',
            ],
            [
                'id'    => 23,
                'title' => 'point_edit',
            ],
            [
                'id'    => 24,
                'title' => 'point_show',
            ],
            [
                'id'    => 25,
                'title' => 'point_delete',
            ],
            [
                'id'    => 26,
                'title' => 'point_access',
            ],
            [
                'id'    => 27,
                'title' => 'point_log_create',
            ],
            [
                'id'    => 28,
                'title' => 'point_log_edit',
            ],
            [
                'id'    => 29,
                'title' => 'point_log_show',
            ],
            [
                'id'    => 30,
                'title' => 'point_log_delete',
            ],
            [
                'id'    => 31,
                'title' => 'point_log_access',
            ],
            [
                'id'    => 32,
                'title' => 'point_redeem_type_create',
            ],
            [
                'id'    => 33,
                'title' => 'point_redeem_type_edit',
            ],
            [
                'id'    => 34,
                'title' => 'point_redeem_type_show',
            ],
            [
                'id'    => 35,
                'title' => 'point_redeem_type_delete',
            ],
            [
                'id'    => 36,
                'title' => 'point_redeem_type_access',
            ],
            [
                'id'    => 37,
                'title' => 'prize_create',
            ],
            [
                'id'    => 38,
                'title' => 'prize_edit',
            ],
            [
                'id'    => 39,
                'title' => 'prize_show',
            ],
            [
                'id'    => 40,
                'title' => 'prize_delete',
            ],
            [
                'id'    => 41,
                'title' => 'prize_access',
            ],
            [
                'id'    => 42,
                'title' => 'redeem_condition_setting_create',
            ],
            [
                'id'    => 43,
                'title' => 'redeem_condition_setting_edit',
            ],
            [
                'id'    => 44,
                'title' => 'redeem_condition_setting_show',
            ],
            [
                'id'    => 45,
                'title' => 'redeem_condition_setting_delete',
            ],
            [
                'id'    => 46,
                'title' => 'redeem_condition_setting_access',
            ],
            [
                'id'    => 47,
                'title' => 'order_create',
            ],
            [
                'id'    => 48,
                'title' => 'order_edit',
            ],
            [
                'id'    => 49,
                'title' => 'order_show',
            ],
            [
                'id'    => 50,
                'title' => 'order_delete',
            ],
            [
                'id'    => 51,
                'title' => 'order_access',
            ],
            [
                'id'    => 52,
                'title' => 'setting_access',
            ],
            [
                'id'    => 53,
                'title' => 'api_data_access',
            ],
            [
                'id'    => 54,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
