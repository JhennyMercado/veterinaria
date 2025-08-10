<?php

namespace Database\Seeders;

use App\Models\Direccion;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        /*User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);*/

        $this->call(DireccionSeeder::class);
        $this->call(PropietarioSeeder::class);
        $this->call(TipoAnimalSeeder::class);
        $this->call(EspecieSeeder::class);
        $this->call(RazaSeeder::class);
        $this->call(MascotaSeeder::class);
        $this->call(ServicioSeeder::class);
        $this->call(CitaSeeder::class);

    }
}
