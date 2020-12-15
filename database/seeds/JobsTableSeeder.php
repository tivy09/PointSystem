<?php

namespace Database\Seeders;
use App\job;
use Illuminate\Database\Seeder;

class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $job = [
            [
                'id'=>106,
                'name'=>'Colleen Warren',
                'gender'=>'Male',
                'age'=>23,
                'email'=>'colleen.warren@noemail.com',
                'phone'=>'03037654321',
                'position'=>2,
                'is_approved'=>NULL,
                'file'=>'tutorial.pdf',
                'letter'=>NULL,
                'created_at'=>'2020-12-15 00:09:31',
                'updated_at'=>'2020-12-15 00:09:31'
            ],
            [
                'id'=>107,
                'name'=>'Norbert H. Powell',
                'gender'=>'Male',
                'age'=>36,
                'email'=>'norbert_powell@xyz.com',
                'phone'=>'03004567891',
                'position'=>4,
                'is_approved'=>3,
                'file'=>'tutorial.pdf',
                'letter'=>NULL,
                'created_at'=>'2020-12-15 00:10:45',
                'updated_at'=>'2020-12-15 09:20:12'
            ],
            [
                'id'=>108,
                'name'=>'Brian V. Dexter',
                'gender'=>'Female',
                'age'=>28,
                'email'=>'brian_dexter@xyz.com',
                'phone'=>'03023325698',
                'position'=>5,
                'is_approved'=>NULL,
                'file'=>'tutorial.pdf',
                'letter'=>NULL,
                'created_at'=>'2020-12-15 00:11:27',
                'updated_at'=>'2020-12-15 00:11:27'
            ],
            [
                'id'=>110,
                'name'=>'Robert Cavanaugh',
                'gender'=>'Male',
                'age'=>25,
                'email'=>'robert_cavanaugh@xyz.com',
                'phone'=>'03067654321',
                'position'=>3,
                'is_approved'=>2,
                'file'=>'tutorial.pdf',
                'letter'=>NULL,
                'created_at'=>'2020-12-15 00:12:10',
                'updated_at'=>'2020-12-15 09:15:42'
            ],
        ];

        job::insert($job);
    }
}
