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
            'equipo1' => 'Inter Miami',
            'equipo2' => 'Leon FC',
            'apuesta' => 100,
            'ganancia' => 145
        ]);
        DB::table('apuestas')->insert([
            'equipo1' => 'Cruz Azul',
            'equipo2' => 'Juventus',
            'apuesta' => 500,
            'ganancia' => 1200
        ]);
        DB::table('apuestas')->insert([
            'equipo1' => 'Real Madrid',
            'equipo2' => 'Atletico de Madrid',
            'apuesta' => 650,
            'ganancia' => 1000
        ]);
        DB::table('apuestas')->insert([
            'equipo1' => 'Faraones',
            'equipo2' => 'Mineros',
            'apuesta' => 120,
            'ganancia' => 900
        ]);
    }
}
