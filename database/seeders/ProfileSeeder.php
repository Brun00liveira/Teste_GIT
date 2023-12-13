<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;


class PerfisSeeder extends Seeder

// 1: Usuário
// 2: Admin geral
// 3: Admin da comunidade
// 4: Admin do capítulo

{
    public function run()
    {
    // User
        User::create([
            'name' => 'User',
            'email' => 'user@example.com',
            'password' => bcrypt('admin'),
            'profile_id' => 1
        ]);
    //
        User::create([
            'name' => 'Admin',
            'email' => 'Admin@example.com',
            'password' => bcrypt('admin'),
            'profile_id' => 2
        ]);
        User::create([
            'name' => 'AdminComunnity',
            'email' => 'AdminComunnity@example.com',
            'password' => bcrypt('admin'),
            'profile_id' => 3
        ]);
        User::create([
            'name' => 'AdminChapter',
            'email' => 'AdminChapter@example.com',
            'password' => bcrypt('admin'),
            'profile_id' => 4
        ]);
    }
}
