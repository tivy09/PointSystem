<?php
namespace Database\Seeders;
use App\job_hirings;
use Illuminate\Database\Seeder;

class JobHiringsTableSeeder extends Seeder
{
    public function run()
    {
        $job_hirings = [
            [
                'id'=>1,
                'name'=>'Rejected',
                'created_at'=>'2020-12-12 14:42:28',
                'updated_at'=>'2020-12-12 14:42:28'
            ],
            [
                'id'=>2,
                'name'=>'Applied',
                'created_at'=>'2020-12-12 14:22:16',
                'updated_at'=>'2020-12-12 14:43:09'
            ],
            [
                'id'=>3,
                'name'=>'Phone interview',
                'created_at'=>'2020-12-12 14:21:54',
                'updated_at'=>'2020-12-12 14:37:38'
            ],
            [
                'id'=>4,
                'name'=>'Schedule Interview',
                'created_at'=>'2020-12-12 14:42:45',
                'updated_at'=>'2020-12-12 14:42:45'
            ],
            [
                'id'=>5,
                'name'=>'Skype Interview',
                'created_at'=>'2020-12-12 14:42:56',
                'updated_at'=>'2020-12-12 14:42:56'
            ],
        ];

        job_hirings::insert($job_hirings);
    }
}
