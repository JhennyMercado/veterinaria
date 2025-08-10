<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EspecieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('especie')->insert([
            [
                'id_tipo' => 1,
                'nom_especie' => 'Tortuga',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_tipo' => 2,
                'nom_especie' => 'Perro',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
