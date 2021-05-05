<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'fname'          => 'Obi Admin',
                'lname'          => 'Peter',
                'phone'          => '08090786798',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$PadOOF6GiHJqI1IQhPZNjeXkKGPip9vJXdhB5ra6lrvZdcZFZDCjy',
                'remember_token' => null,
            ],
            [
                'id'             => 2,
                'fname'           => 'John Analyst',
                'lname'          => 'Odo',
                'phone'          => '0809000000',
                'email'          => 'analyst@analyst.com',
                'password'       => '$2y$10$PadOOF6GiHJqI1IQhPZNjeXkKGPip9vJXdhB5ra6lrvZdcZFZDCjy',
                'remember_token' => null,
            ],
            [
                'id'             => 3,
                'fname'           => 'Oluwa CFO',
                'lname'          => 'Ojo',
                'phone'          => '0809000000',
                'email'          => 'cfo@cfo.com',
                'password'       => '$2y$10$PadOOF6GiHJqI1IQhPZNjeXkKGPip9vJXdhB5ra6lrvZdcZFZDCjy',
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
