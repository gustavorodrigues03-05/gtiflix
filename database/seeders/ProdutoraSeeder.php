<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdutoraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produtoras')->insert(
            [
                [
                    'name' => "Warner Bros. Entertainment",
                ],

                [
                    'name' => "Paramount Pictures",
                ],

                [
                    'name' => "Legendary Pictures",
                ],

                [
                    'name' => "Warner Bros. Pictures",
                ],

                [
                    'name' => "Syncopy",
                ],

                [
                    'name' => "Lynda Obst Productions",
                ],

                
            ]
            );
    }
}
