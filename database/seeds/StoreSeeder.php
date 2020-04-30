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
            'tip' => 'Nuevo modo de dificultad',
            'price' => '2500' 
        ]);
    }
}
