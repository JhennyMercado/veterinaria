<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TipoAnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('tipo_animal')->insert([
            [
                'nom_tipo' => 'Exotico',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom_tipo' => 'Mascota',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
