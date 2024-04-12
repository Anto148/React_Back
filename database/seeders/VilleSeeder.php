<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class VilleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $villes = [
            ['nom' => 'Cotonou'],
            ['nom' => 'Abomey'],
            ['nom' => 'Ouidah'],
            ['nom' => 'Grand-Popo'],
            ['nom' => 'Lomé'],
            ['nom' => 'Lokossa'],
        ];

        // Insertion des données dans la table des villes
        DB::table('villes')->insert($villes);
    }
}
