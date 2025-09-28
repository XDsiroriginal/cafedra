<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'fio' => 'Администратор Системы',
            'email' => 'admin@shop.ru',
            'password' => Hash::make('QWEasd123'),
            'role' => 'admin'
        ]);

        DB::table('users')->insert([
            'fio' => 'Тестовый Пользователь',
            'email' => 'user@shop.ru',
            'password' => Hash::make('password'),
            'role' => 'client'
        ]);
    }
}
