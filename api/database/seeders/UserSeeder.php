<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin')
        ]);
        DB::table('users')->insert([
            'name' => 'Luis',
            'email' => 'luis@gmail.com',
            'password' => Hash::make('luis')
        ]);
        DB::table('users')->insert([
            'name' => 'Carlos',
            'email' => 'carlos@gmail.com',
            'password' => Hash::make('carlos')
        ]);
        DB::table('users')->insert([
            'name' => 'Jesse',
            'email' => 'jesse@gmail.com',
            'password' => Hash::make('jesse')
        ]);
        DB::table('users')->insert([
            'name' => 'Brissa',
            'email' => 'brissa@gmail.com',
            'password' => Hash::make('brissa')
        ]);
        DB::table('users')->insert([
            'name' => 'Mario',
            'email' => 'mario@gmail.com',
            'password' => Hash::make('mario')
        ]);
        DB::table('users')->insert([
            'name' => 'Liadeo',
            'email' => 'liadeo@gmail.com',
            'password' => Hash::make('liadeo')
        ]);
        DB::table('users')->insert([
            'name' => 'Tadeo',
            'email' => 'tadeo@gmail.com',
            'password' => Hash::make('tadeo')
        ]);
    }
}
