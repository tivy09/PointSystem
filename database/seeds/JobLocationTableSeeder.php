<?php
namespace Database\Seeders;
use App\job_location;
use Illuminate\Database\Seeder;

class JobLocationTableSeeder extends Seeder
{
    public function run()
    {
        $job_locations = [
            [
                'id'=>1,
                'name'=>'Muar',
                'created_at'=>'2020-12-12 14:42:28',
                'updated_at'=>'2020-12-12 14:42:28'
            ],
            [
                'id'=>2,
                'name'=>'Johor',
                'created_at'=>'2020-12-12 14:22:16',
                'updated_at'=>'2020-12-12 14:43:09'
            ],
            [
                'id'=>3,
                'name'=>'Kedah',
                'created_at'=>'2020-12-12 14:21:54',
                'updated_at'=>'2020-12-12 14:37:38'
            ],
            [
                'id'=>4,
                'name'=>'KL',
                'created_at'=>'2020-12-12 14:42:45',
                'updated_at'=>'2020-12-12 14:42:45'
            ],
            [
                'id'=>5,
                'name'=>'PJ',
                'created_at'=>'2020-12-12 14:42:56',
                'updated_at'=>'2020-12-12 14:42:56'
            ],
        ];

        job_location::insert($job_locations);
    }
}
