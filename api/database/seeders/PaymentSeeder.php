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
            'metodo' => 'Visa',
            'numero_tarjeta' => '4548812049400004',
            'monto' => 100
        ]);
        DB::table('payment')->insert([
            'metodo' => 'SPEI',
            'numero_tarjeta' => '4548812049426334',
            'monto' => 900
        ]);
        DB::table('payment')->insert([
            'metodo' => 'Oxxo',
            'numero_tarjeta' => '4551212049400004',
            'monto' => 300
        ]);
    }
}
