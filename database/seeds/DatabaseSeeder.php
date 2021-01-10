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
        ]);
        $this->call(SalaryTableSeeder::class);
        $this->call(DepartmentTableSeeder::class);
        $this->call(JobAppTableSeeder::class);
        $this->call(JobTypeTableSeeder::class);
        $this->call(JobsTableSeeder::class);
        $this->call(JobLocationTableSeeder::class);
        $this->call(JobHiringsTableSeeder::class);
    }
}
