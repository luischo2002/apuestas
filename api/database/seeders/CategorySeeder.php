<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categorys')->insert([
            'name' => 'NFL',
        ]);
        DB::table('categorys')->insert([
            'name' => 'MLB',
        ]);
        DB::table('categorys')->insert([
            'name' => 'MLS',
        ]);
        DB::table('categorys')->insert([
            'name' => 'NBA',
        ]);
        DB::table('categorys')->insert([
            'name' => 'NHL',
        ]);
    }
}
