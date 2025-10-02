<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('generos')->insert(
            ['name' => "Terror"],
            ['name' => "Ação"],
            ['name' => "Comédia"],
            ['name' => "Romance"],
            ['name' => "Suspense"],
        );
    }
}
