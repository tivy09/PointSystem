<?php

namespace Database\Seeders;
use App\job_type;
use Illuminate\Database\Seeder;

class JobTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $job_types = [
            [
                'id'=>1,
                'name'=>'Part Time',
                'created_at'=>'2020-12-12 14:42:28',
                'updated_at'=>'2020-12-12 14:42:28'
            ],
            [
                'id'=>2,
                'name'=>'Remote',
                'created_at'=>'2020-12-12 14:22:16',
                'updated_at'=>'2020-12-12 14:43:09'
            ],
            [
                'id'=>3,
                'name'=>'Intern',
                'created_at'=>'2020-12-12 14:21:54',
                'updated_at'=>'2020-12-12 14:37:38'
            ],
            [
                'id'=>4,
                'name'=>'Full Time',
                'created_at'=>'2020-12-12 14:42:45',
                'updated_at'=>'2020-12-12 14:42:45'
            ],
        ];

        job_type::insert($job_types);
    }
}
