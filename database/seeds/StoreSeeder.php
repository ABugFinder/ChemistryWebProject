<?php

use Illuminate\Database\Seeder;
use App\Store;
class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = Store::create([
            'name' => 'Memorama - Experto',
            'description' => 'Nuevo modo de dificultad',
            'price' => '2500' 
        ]);

        $product = Store::create([
            'name' => 'Tetris - Experto',
            'description' => 'Nuevo modo de dificultad',
            'price' => 2500
        ]);

        $product = Store::create([
            'name' => 'Memorama - Extremo',
            'description' => 'Nuevo modo de dificultad',
            'price' => 3000
        ]);

        $product = Store::create([
            'name' => 'Tetris - Extremo',
            'description' => 'Nuevo modo de dificultad',
            'price' => 3000
        ]);

        $product = Store::create([
            'name' => 'Memorama - Medieval',
            'description' => 'Desbloquea el skin Medieval para Memorama',
            'price' => 5000
        ]);

        $product = Store::create([
            'name' => 'Tetris - Medieval',
            'description' => 'Desbloquea el skin Medieval para Tetris',
            'price' => 5000
        ]);

        $product = Store::create([
            'name' => 'Memorama - Cyber',
            'description' => 'Desbloquea el skin Cyber para Memorama',
            'price' => 5000
        ]);

        $product = Store::create([
            'name' => 'Tetris - Cyber',
            'description' => 'Desbloquea el skin Cyber para Tetris',
            'price' => 5000
        ]);

        //Seeders de los tips
    }
}
