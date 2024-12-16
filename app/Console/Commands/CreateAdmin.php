<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CreateAdmin extends Command
{
    protected $signature = 'make:admin';
    protected $description = 'Create a default admin user if none exists';

    public function handle()
    {
        if (!User::where('role', 'admin')->exists()) {
            User::create([
                'name' => $this->ask('Enter admin name'),
                'email' => $this->ask('Enter admin email'),
                'password' => Hash::make($this->secret('Enter admin password')),
                'role' => 'admin',
            ]);

            $this->info('Admin user created successfully.');
        } else {
            $this->info('Admin user already exists.');
        }
    }
}


// namespace App\Console\Commands;

// use Illuminate\Console\Command;

// class CreateAdmin extends Command
// {
//     /**
//      * The name and signature of the console command.
//      *
//      * @var string
//      */
//     protected $signature = 'app:create-admin';

//     /**
//      * The console command description.
//      *
//      * @var string
//      */
//     protected $description = 'Command description';

//     /**
//      * Execute the console command.
//      */
//     public function handle()
//     {
//         //
//     }
// }
