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
            'name' => 'Memorama - Medieval',
            'description' => 'Desbloquea el skin Medieval para Memorama',
            '' => 5000,
            'ventas' => 0
        ]);

        $product = Store::create([
            'name' => 'Tetris - Medieval',
            'description' => 'Desbloquea el skin Medieval para Tetris',
            '' => 5000,
            'ventas' => 1
        ]);

        $product = Store::create([
            'name' => 'Memorama - Cyber',
            'description' => 'Desbloquea el skin Cyber para Memorama',
            '' => 5000,
            'ventas' => 0
        ]);

        $product = Store::create([
            'name' => 'Tetris - Cyber',
            'description' => 'Desbloquea el skin Cyber para Tetris',
            '' => 5000,
            'ventas' => 0
        ]);
        
        $product = Store::create([
            'name' => 'Memorama - Experto',
            'description' => 'Nuevo modo de dificultad',
            '' => '2500' ,
            'ventas' => 0
        ]);

        $product = Store::create([
            'name' => 'Tetris - Experto',
            'description' => 'Nuevo modo de dificultad',
            '' => 2500,
            'ventas' => 0
        ]);

        $product = Store::create([
            'name' => 'Memorama - Extremo',
            'description' => 'Nuevo modo de dificultad',
            '' => 3000,
            'ventas' => 0
        ]);

        $product = Store::create([
            'name' => 'Tetris - Extremo',
            'description' => 'Nuevo modo de dificultad',
            '' => 3000,
            'ventas' => 0
        ]);

       

        //Seeders de los tips
    }
}
