<?php
namespace Database\Seeders;
use App\salary;
use Illuminate\Database\Seeder;

class SalaryTableSeeder extends Seeder
{
    public function run()
    {
        $salarys = [
            [
                'id'=>1,
                'employee_id'=>1,
                'Salary_amount'=>2000,
                'tax'=>6,
                'created_at'=>'2020-12-15 09:18:21',
                'updated_at'=>'2020-12-15 09:18:21'
            ],
            [
                'id'=>2,
                'employee_id'=>2,
                'Salary_amount'=>1200,
                'tax'=>6,
                'created_at'=>'2020-12-15 09:56:13',
                'updated_at'=>'2020-12-15 09:56:13'
            ],
            [
                'id'=>3,
                'employee_id'=>3,
                'Salary_amount'=>1200,
                'tax'=>6,
                'created_at'=>'2020-12-15 09:56:13',
                'updated_at'=>'2020-12-15 09:56:13'
            ],
            [
                'id'=>4,
                'employee_id'=>4,
                'Salary_amount'=>1200,
                'tax'=>6,
                'created_at'=>'2020-12-15 09:56:13',
                'updated_at'=>'2020-12-15 09:56:13'
            ],
            [
                'id'=>5,
                'employee_id'=>5,
                'Salary_amount'=>1200,
                'tax'=>6,
                'created_at'=>'2020-12-15 09:56:13',
                'updated_at'=>'2020-12-15 09:56:13'
            ],
            [
                'id'=>6,
                'employee_id'=>6,
                'Salary_amount'=>1200,
                'tax'=>6,
                'created_at'=>'2020-12-15 09:56:13',
                'updated_at'=>'2020-12-15 09:56:13'
            ],
            [
                'id'=>7,
                'employee_id'=>7,
                'Salary_amount'=>1200,
                'tax'=>6,
                'created_at'=>'2020-12-15 09:56:13',
                'updated_at'=>'2020-12-15 09:56:13'
            ],
            [
                'id'=>8,
                'employee_id'=>8,
                'Salary_amount'=>1200,
                'tax'=>6,
                'created_at'=>'2020-12-15 09:56:13',
                'updated_at'=>'2020-12-15 09:56:13'
            ],
            [
                'id'=>9,
                'employee_id'=>9,
                'Salary_amount'=>1200,
                'tax'=>6,
                'created_at'=>'2020-12-15 09:56:13',
                'updated_at'=>'2020-12-15 09:56:13'
            ],
        ];

        salary::insert($salarys);
    }
}
