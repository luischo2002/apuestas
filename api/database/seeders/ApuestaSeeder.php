<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class ApuestaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('apuestas')->insert([
            'seleccion' => 'Inter Miami',
            'apuesta' => 100,
            'ganancia' => 145
        ]);
        DB::table('apuestas')->insert([
            'seleccion' => 'New York Yankees',
            'apuesta' => 500,
            'ganancia' => 1200
        ]);
        DB::table('apuestas')->insert([
            'seleccion' => 'New Orleans Saints',
            'apuesta' => 650,
            'ganancia' => 1000
        ]);
        DB::table('apuestas')->insert([
            'seleccion' => 'Los Angeles Lakers',
            'apuesta' => 120,
            'ganancia' => 900
        ]);
    }
}
