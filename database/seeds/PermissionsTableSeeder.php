<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => '1',
                'title' => 'user_management_access',
            ],
            [
                'id'    => '2',
                'title' => 'permission_create',
            ],
            [
                'id'    => '3',
                'title' => 'permission_edit',
            ],
            [
                'id'    => '4',
                'title' => 'permission_show',
            ],
            [
                'id'    => '5',
                'title' => 'permission_delete',
            ],
            [
                'id'    => '6',
                'title' => 'permission_access',
            ],
            [
                'id'    => '7',
                'title' => 'role_create',
            ],
            [
                'id'    => '8',
                'title' => 'role_edit',
            ],
            [
                'id'    => '9',
                'title' => 'role_show',
            ],
            [
                'id'    => '10',
                'title' => 'role_delete',
            ],
            [
                'id'    => '11',
                'title' => 'role_access',
            ],
            [
                'id'    => '12',
                'title' => 'user_create',
            ],
            [
                'id'    => '13',
                'title' => 'user_edit',
            ],
            [
                'id'    => '14',
                'title' => 'user_show',
            ],
            [
                'id'    => '15',
                'title' => 'user_delete',
            ],
            [
                'id'    => '16',
                'title' => 'event_create',
            ],
            [
                'id'    => '17',
                'title' => 'event_edit',
            ],
            [
                'id'    => '18',
                'title' => 'event_show',
            ],
            [
                'id'    => '19',
                'title' => 'event_delete',
            ],
            [
                'id'    => '20',
                'title' => 'event_access',
            ],
            [
                'id'    => '21',
                'title' => 'project_status',
            ],
            [
                'id'    => '22',
                'title' => 'project_create',
            ],
            [
                'id'    => '23',
                'title' => 'user_access',
            ],
            [
                'id'    => '24',
                'title' => 'campany_controller',
            ],
            [
                'id'    => '25',
                'title' => 'project_manager',
            ],
            [
                'id'    => '26',
                'title' => 'project_employee',
            ],
            [
                'id'    => '27',
                'title' => 'manager_calendar',
            ],
            [
                'id'    => '28',
                'title' => 'employee_calendar',
            ],
            [
                'id'    => '29',
                'title' => 'salary_employee',
            ],
            [
                'id'    => '30',
                'title' => 'Apply_leave_Manager',
            ],
            [
                'id'    => '31',
                'title' => 'Apply_leave_Employee',
            ],
        ];

        Permission::insert($permissions);
    }
}
