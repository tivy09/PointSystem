<?php

namespace Database\Seeders;
use App\job_app;
use Illuminate\Database\Seeder;

class JobAppTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $job_app = [
            [
                'id'=>2,
                'name'=>'Customer Engineer (Data Management)',
                'location'=>1,
                'department'=>5,
                'types'=>4,
                'description'=>NULL,
                'CPeople'=>1,
                'created_at'=>'2020-12-14 04:53:17',
                'updated_at'=>'2020-12-15 00:09:32'
            ],
            [
                'id'=>3,
                'name'=>'Global Business Brand Team - Campaign Activations',
                'location'=>2,
                'department'=>6,
                'types'=>1,
                'description'=>NULL,
                'CPeople'=>2,
                'created_at'=>'2020-12-14 04:54:18',
                'updated_at'=>'2020-12-15 00:12:10'
            ],
            [
                'id'=>4,
                'name'=>'Finance Project Manager (PMO)',
                'location'=>2,
                'department'=>7,
                'types'=>1,
                'description'=>NULL,
                'CPeople'=>4,
                'created_at'=>'2020-12-14 04:54:35',
                'updated_at'=>'2020-12-15 00:10:45'
            ],
            [
                'id'=>5,
                'name'=>'Senior Software Engineer - Data Management',
                'location'=>4,
                'department'=>5,
                'types'=>3,
                'description'=>NULL,
                'CPeople'=>3,
                'created_at'=>'2020-12-14 04:54:56',
                'updated_at'=>'2020-12-15 00:11:27'
            ],
            [
                'id'=>6,
                'name'=>'Human Resource Employee QQQQQQ',
                'location'=>4,
                'department'=>8,
                'types'=>4,
                'description'=>'Human Resource Department QQQQQQQ',
                'CPeople'=>3,
                'created_at'=>'2020-12-14 05:59:26',
                'updated_at'=>'2020-12-14 08:37:49'
            ],
        ];

        job_app::insert($job_app);
    }
}
