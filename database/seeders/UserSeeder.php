<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
                'name' => 'John Doe',
                'email' => 'doctor@shms.com',
                'password' => bcrypt('123456'),
                'role' => 'doctor',
            ],
            [
                'name' => 'Jane Doe',
                'email' => 'nurse@shms.com',
                'password' => bcrypt('123456'),
                'role' => 'nurse',
            ],
            [
                'name' => 'Amina Ibrahim',
                'email' => 'pharmacist@shms.com',
                'password' => bcrypt('123456'),
                'role' => 'pharmacist',
            ],
            [
                'name' => 'Aliyu Musa',
                'email' => 'labscientist@shms.com',
                'password' => bcrypt('123456'),
                'role' => 'lab_scientist',
            ],
        ]);

    }
}
