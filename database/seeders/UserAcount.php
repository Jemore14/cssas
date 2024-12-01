<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserAcount extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
                'firstname' => 'John Bryan',
                'middlename' => 'Argota',
                'lastname' => 'Javellana',
                'email' => 'johnbryanjavellana@gmail.com',
                'password' => bcrypt('Johnbryan#22'),
                'role' => 'SUPERADMIN',
                'profile_picture' => 'avatar.png'
            ]
        ]);
    }
}
