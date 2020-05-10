<?php

use Illuminate\Database\Seeder;
use App\PurchasesDate;

class PurchasesDateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = PurchasesDate::create([
            'date' => '2018',
            'Memorama - Medieval' => 5, 
            'Tetris - Medieval' => 6, 
            'Memorama - Cyber' => 24, 
            'Tetris - Cyber' => 18, 
            'Memorama - Experto' => 24,
            'Tetris - Experto' => 5, 
            'Memorama - Extremo' => 7, 
            'Tetris - Extremo' => 9
        ]);

        $product = PurchasesDate::create([
            'date' => '2019',
            'Memorama - Medieval' => 8, 
            'Tetris - Medieval' => 45, 
            'Memorama - Cyber' => 20, 
            'Tetris - Cyber' => 10, 
            'Memorama - Experto' => 20,
            'Tetris - Experto' => 1, 
            'Memorama - Extremo' => 8, 
            'Tetris - Extremo' => 7
        ]);

        $product = PurchasesDate::create([
            'date' => '2020',
            'Memorama - Medieval' => 100, 
            'Tetris - Medieval' => 50, 
            'Memorama - Cyber' => 25, 
            'Tetris - Cyber' => 15, 
            'Memorama - Experto' => 25,
            'Tetris - Experto' => 5, 
            'Memorama - Extremo' => 15, 
            'Tetris - Extremo' => 16
        ]);
    }
}
