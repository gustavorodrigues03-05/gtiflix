<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FilmeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('filmes')->insert(
        [
            [
            'name' => "Interestelar",
            'lancamento' => "2014-09-09",
            'classificacao' => "10",
            'duracao' => "169",
            'descricao' => "Após ver a Terra consumindo boa parte de suas reservas naturais, um grupo de astronautas recebe a missão de verificar possíveis planetas para receberem a população mundial, possibilitando a continuação da espécie.",
            ],

            [
            'name' => "ET: O Extraterrestre",
            'lancamento' => "1982-09-09",
            'classificacao' => "0",
            'duracao' => "120",
            'descricao' => "Um garoto faz amizade com um ser de outro planeta, que ficou sozinho na Terra, protegendo-o de todas as formas para evitar que ele seja capturado e transformado em cobaia. Gradativamente, surge entre os dois uma forte amizade.",
            ],

            [
            'name' => "Cães de Aluguel",
            'lancamento' => "1992-09-09",
            'classificacao' => "16",
            'duracao' => "99",
            'descricao' => "Joe Cabot (Lawrence Tierney), um experiente criminoso, reuniu seis bandidos para um grande roubo de diamantes, mas estes seis homens não sabem nada um sobre os outros e cada um utiliza uma cor como codinome.",
            ],
        ]

        );
    }
}
