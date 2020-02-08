<?php

use Illuminate\Database\Seeder;
use App\Game;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $game = Game::create([
            'name' => 'Tetris',
        ]);

        $game = Game::create([
            'name' => 'Memorama',
        ]);
    }
}
