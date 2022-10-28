<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Produto;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public static function run()
    {
        //

        for($i = 0; $i < 200; $i++){
            $produto = Produto::create([
                "nome" => fake()->words(2, true),
                "codigo" => fake()->randomNumber(8, true),
                "preco" => fake()->randomFloat(2),
                "estoque" => fake()->randomNumber(2, false),
                "descricao" => fake()->paragraph(),
            ]);

            $produto->save();
        }
    
    }
}

