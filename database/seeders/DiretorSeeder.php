<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiretorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('diretores')->insert(
        [
            [
                'name' => "Steven Spielberg",
                'descricao' => "Diretor do filme ET: O Extraterrestre",
                'nacionalidade_id' => 1
            ],
            
            [
                'name' => "Quentin Tarantino",
                'descricao' => "Diretor do filme Cães de Aluguel",
                'nacionalidade_id' => 1
            ],

            [
                'name' => "Christopher Nolan",
                'descricao' => "Diretor do filme Interestelar",
                'nacionalidade_id' => 3
            ],
        ]
            
        );


    }
}
