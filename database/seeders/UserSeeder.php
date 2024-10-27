<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //tambahkan fake data dinamic for user
        \App\Models\User::factory(10)->create();

        //tambahkan static data user
        \App\Models\User::create([
            'name' => 'Admin Test',
            'email' => 'test@fic11.com',
            'password' => Hash::make('12345678'),
            'roles' => 'ADMIN',
            'Phone' => '081234567890',
        ]);
    }
}
