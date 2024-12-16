<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run()
    {
        // Check if an admin exists, then create one if not
        if (!User::where('role', 'admin')->exists()) {
            User::create([
                'name' => 'Default Admin',
                'email' => 'admin@shms.com', // Use a secure default email
                'password' => Hash::make('123456'), // Use a secure default password
                'role' => 'admin',
            ]);
        }
    }
}
