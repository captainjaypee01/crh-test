<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        User::create([
            'name'              => 'testuser',
            'email'             => 'testuser@test.com',
            'username'          => 'testuser',
            'phone_number'      => '99999999',
            'company_name'      => 'Test Company',
            'password'          => Hash::make('password'),
        ]);
        
    }
}
