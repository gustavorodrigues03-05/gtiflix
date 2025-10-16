<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AtorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('atores')->insert(
        [
            [
                'name' => "Wagner Moura",
                'descricao' => "Ator foda brasileiro",
                'nacionalidade_id' => 1
            ],

            [
                'name' => "Megan Fox",
                'descricao' => "Muito lembrada por atuar em Transformers",
                'nacionalidade_id' => 2
            ],
        ]
        
        );
    }
}
