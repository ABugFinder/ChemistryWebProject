<?php

use Illuminate\Database\Seeder;
use App\GameMode;

class GameModeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gameMode = GameMode::create([
            'dificulty' => 'Novato',
            'description' => 'Tendrás 120 segundos para colocar 10 elementos en su lugar correcto',
        ]);

        $gameMode = GameMode::create([
            'dificulty' => 'Fácil',
            'description' => 'Tendrás 110 segundos para colocar 20 elementos en su lugar correcto',
        ]);

        $gameMode = GameMode::create([
            'dificulty' => 'Normal',
            'description' => 'Tendrás 100 segundos para colocar 30 elementos en su lugar correcto',
        ]);

        $gameMode = GameMode::create([
            'dificulty' => 'Avanzado',
            'description' => 'Tendrás 90 segundos para colocar 30 elementos en su lugar correcto',
        ]);

        $gameMode = GameMode::create([
            'dificulty' => 'Experto',
            'description' => 'Tendrás 60 segundos para colocar 25 elementos en su lugar correcto',
        ]);

        $gameMode = GameMode::create([
            'dificulty' => 'Extremo',
            'description' => 'Tendrás 30 segundos para colocar 25 elementos en su lugar correcto',
        ]);

        $gameMode = GameMode::create([
            'dificulty' => 'Novato',
            'description' => 'Tendrás 120 segundos para juntar los elementos de la catagoría de los Alcalinotérreos',
        ]);

        $gameMode = GameMode::create([
            'dificulty' => 'Fácil',
            'description' => 'Tendrás 120 segundos para juntar los elementos de la catagoría de los Gases Nobles',
        ]);

        $gameMode = GameMode::create([
            'dificulty' => 'Normal',
            'description' => 'Tendrás 120 segundos para juntar los No metales',
        ]);

        $gameMode = GameMode::create([
            'dificulty' => 'Avanzado',
            'description' => 'Tendrás 120 segundos para juntar los elementos de la catagoría de los Lantínidos y Actínidos',
        ]);

        $gameMode = GameMode::create([
            'dificulty' => 'Experto',
            'description' => 'Tendrás 120 segundos para juntar los elementos de la catagoría de los Metales de Transición',
        ]);

        $gameMode = GameMode::create([
            'dificulty' => 'Extremo',
            'description' => 'Tendrás 120 segundos para juntar los elementos de la catagoría de los Metales',
        ]);
    }
}
