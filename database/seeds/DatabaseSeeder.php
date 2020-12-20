<?php

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
            // SalaryTableSeeder::class,
            // DepartmentTableSeeder::class,
            // JobAppTableSeeder::class,
            // JobTypeTableSeeder::class,
            // JobsTableSeeder::class,
            // JobLocationTableSeeder::class,
            // JobHiringsTableSeeder::class
        ]);
    }
}
