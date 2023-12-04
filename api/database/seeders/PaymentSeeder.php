<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('payment')->insert([
            'id_usuario' => 1,
            'metodo' => 'Visa',
            'numero_tarjeta' => '4548812049400004',

        ]);
        DB::table('payment')->insert([
            'id_usuario' => 1,
            'metodo' => 'SPEI',
            'numero_tarjeta' => '4548812049426334',

        ]);
        DB::table('payment')->insert([
            'id_usuario' => 1,
            'metodo' => 'Oxxo',
            'numero_tarjeta' => '4551212049400004',

        ]);
    }
}
