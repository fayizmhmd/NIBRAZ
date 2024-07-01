<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Kiran',
            'email' => 'kiran@main.com',
            'phone' => '9998887771',
            'gender' => 'MALE',
            'dob' => '05-04-1995',
            'insurance_type' => 'SELF',
            'customer_id' => "FMD" .date('md')."002",
            'is_active' => '1',
            'password' => bcrypt('12345678'), 
        ])->assignRole('customer');

        User::create([
            'name' => 'Sam',
            'email' => 'sam@main.com',
            'phone' => '9998887772',
            'gender' => 'MALE',
            'dob' => '15-04-1995',
            'insurance_type' => 'FAMILY',
            'customer_id' => "FMD" .date('md')."003",
            'is_active' => '1',
            'password' => bcrypt('12345678'), 
        ])->assignRole('customer');

        User::create([
            'name' => 'Anu',
            'email' => 'anu@main.com',
            'phone' => '9998887773',
            'gender' => 'FEMALE',
            'dob' => '07-04-1995',
            'insurance_type' => 'SELF',
            'customer_id' => "FMD" .date('md')."004",
            'is_active' => '1',
            'password' => bcrypt('12345678'), 
        ])->assignRole('customer');
    }
}
