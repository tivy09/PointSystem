<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'phoneNumber'    => '0115654631',
                'salary'         =>  1200,
                'position'       => 'Admin',
                'password'       => '$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei',
                'remember_token' => null,
            ],
            [
                'id'             => 2,
                'name'           => 'Manager1',
                'email'          => 'Manager1@Manager1.com',
                'phoneNumber'    => '0115654631',
                'salary'         =>  1200,
                'position'       => 'Manager',
                'password'       => '$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei',
                'remember_token' => null,
            ],
            [
                'id'             => 3,
                'name'           => 'Manager2',
                'email'          => 'Manager2@Manager2.com',
                'phoneNumber'    => '0115654631',
                'salary'         =>  1200,
                'position'       => 'Manager',
                'password'       => '$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei',
                'remember_token' => null,
            ],
            [
                'id'             => 4,
                'name'           => 'Manager3',
                'email'          => 'Manager3@Manager3.com',
                'phoneNumber'    => '0115654631',
                'salary'         =>  1200,
                'position'       => 'Manager',
                'password'       => '$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei',
                'remember_token' => null,
            ],
            [
                'id'             => 5,
                'name'           => 'Manager4',
                'email'          => 'Manager4@Manager4.com',
                'phoneNumber'    => '0115654631',
                'salary'         =>  1200,
                'position'       => 'Manager',
                'password'       => '$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei',
                'remember_token' => null,
            ],
            [
                'id'             => 6,
                'name'           => 'Manager5',
                'email'          => 'Manager5@Manager5.com',
                'phoneNumber'    => '0115654631',
                'salary'         =>  1200,
                'position'       => 'Manager',
                'password'       => '$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei',
                'remember_token' => null,
            ],
            [
                'id'             => 7,
                'name'           => 'Employee',
                'email'          => 'Employee@Employee.com',
                'phoneNumber'    => '0115654631',
                'salary'         =>  1200,
                'position'       => 'Employee',
                'password'       => '$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei',
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
