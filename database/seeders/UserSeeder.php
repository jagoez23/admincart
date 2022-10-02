<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Alejo Goez',
            'phone' => '3008907654',
            'email' => 'ale@prueba.com',
            'profile' => 'ADMIN',
            'status' => 'ACTIVE',
            'password' => bcrypt('123'),
        ]);
        User::create([
            'name' => 'Alejandra Restrepo',
            'phone' => '300765098',
            'email' => 'aleja@prueba.com',
            'profile' => 'EMPLOYEE',
            'status' => 'ACTIVE',
            'password' => bcrypt('123'),
        ]);
    }
}
