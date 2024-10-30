<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Patients;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Patients::insert(
            [
                [
                    'name' => 'Amina Bello',
                    'email' => 'amina.bello@example.com',
                    'phone' => '07012345678',
                    'address' => '123 Sokoto Road, Kano',
                    'inpatient' => true,
                ],
                [
                    'name' => 'Usman Abubakar',
                    'email' => 'usman.abubakar@example.com',
                    'phone' => '08012345678',
                    'address' => '456 Maiduguri Avenue, Kaduna',
                    'inpatient' => false,
                ],
                [
                    'name' => 'Fatima Ibrahim',
                    'email' => 'fatima.ibrahim@example.com',
                    'phone' => '09012345678',
                    'address' => '789 Zaria Street, Katsina',
                    'inpatient' => true,
                ],
                [
                    'name' => 'Muhammad Adamu',
                    'email' => 'muhammad.adamu@example.com',
                    'phone' => '07087654321',
                    'address' => '101 Yobe Crescent, Bauchi',
                    'inpatient' => false,
                ],
                [
                    'name' => 'Zainab Mohammed',
                    'email' => 'zainab.mohammed@example.com',
                    'phone' => '08087654321',
                    'address' => '202 Kano Road, Jigawa',
                    'inpatient' => true,
                ],
                [
                    'name' => 'Salman Suleiman',
                    'email' => 'salman.suleiman@example.com',
                    'phone' => '09087654321',
                    'address' => '303 Taraba Street, Gombe',
                    'inpatient' => false,
                ],
                [
                    'name' => 'Hauwa Abdullahi',
                    'email' => 'hauwa.abdullahi@example.com',
                    'phone' => '07023456789',
                    'address' => '404 Borno Road, Sokoto',
                    'inpatient' => true,
                ],
                [
                    'name' => 'Yusuf Hassan',
                    'email' => 'yusuf.hassan@example.com',
                    'phone' => '08023456789',
                    'address' => '505 Kebbi Avenue, Adamawa',
                    'inpatient' => false,
                ],
                [
                    'name' => 'Ruqayyah Sani',
                    'email' => 'ruqayyah.sani@example.com',
                    'phone' => '09023456789',
                    'address' => '606 Niger Street, Yobe',
                    'inpatient' => true,
                ],
                [
                    'name' => 'Ibrahim Nasir',
                    'email' => 'ibrahim.nasir@example.com',
                    'phone' => '07034567890',
                    'address' => '707 Plateau Road, Kano',
                    'inpatient' => false,
                ],
                [
                    'name' => 'Khadijat Musa',
                    'email' => 'khadijat.musa@example.com',
                    'phone' => '08034567890',
                    'address' => '808 Zamfara Avenue, Sokoto',
                    'inpatient' => true,
                ],
                [
                    'name' => 'Omar Abdulkareem',
                    'email' => 'omar.abdulkareem@example.com',
                    'phone' => '09034567890',
                    'address' => '909 Gombe Road, Kebbi',
                    'inpatient' => false,
                ],
                [
                    'name' => 'Sadiya Waziri',
                    'email' => 'sadiya.waziri@example.com',
                    'phone' => '07045678901',
                    'address' => '1011 Katsina Road, Borno',
                    'inpatient' => true,
                ],
                [
                    'name' => 'Nura Tijjani',
                    'email' => 'nura.tijjani@example.com',
                    'phone' => '08045678901',
                    'address' => '1212 Adamawa Avenue, Jigawa',
                    'inpatient' => false,
                ],
                [
                    'name' => 'Aisha Rufa’i',
                    'email' => 'aisha.rufai@example.com',
                    'phone' => '09045678901',
                    'address' => '1313 Yobe Street, Kaduna',
                    'inpatient' => true,
                ],
            ]
        );
    }
}

