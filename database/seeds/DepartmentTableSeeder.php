<?php
namespace Database\Seeders;

use App\department;
use Illuminate\Database\Seeder;

class DepartmentTableSeeder extends Seeder
{
    public function run()
    {
        $departments = [
            [
                'id'=>1,
                'name'=>'Marketing Department',
                'created_at'=>'2020-12-12 14:42:28',
                'updated_at'=>'2020-12-12 14:42:28'
            ],
            [
                'id'=>2,
                'name'=>'Software Engineering Department',
                'created_at'=>'2020-12-12 14:22:16',
                'updated_at'=>'2020-12-12 14:43:09'
            ],
            [
                'id'=>3,
                'name'=>'Marketing Department',
                'created_at'=>'2020-12-12 14:21:54',
                'updated_at'=>'2020-12-12 14:37:38'
            ],
            [
                'id'=>4,
                'name'=>'Finance Department',
                'created_at'=>'2020-12-12 14:42:45',
                'updated_at'=>'2020-12-12 14:42:45'
            ],
            [
                'id'=>5,
                'name'=>'Human Resource Department',
                'created_at'=>'2020-12-12 14:42:56',
                'updated_at'=>'2020-12-12 14:42:56'
            ],
        ];

        department::insert($departments);
    }
}
