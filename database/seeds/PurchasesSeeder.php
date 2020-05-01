<?php

use Illuminate\Database\Seeder;
use App\Purchase;

class PurchasesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        $purchase = Purchase::create([
            'id_user' => '1',
            'id_store' =>  '2'
        ]);

        $purchase = Purchase::create([
            'id_user' => '2',
            'id_store' =>  '1'
        ]);

        $purchase = Purchase::create([
            'id_user' => '2',
            'id_store' =>  '2'
        ]);

        $purchase = Purchase::create([
            'id_user' => '2',
            'id_store' =>  '3'
        ]);

        $purchase = Purchase::create([
            'id_user' => '2',
            'id_store' =>  '4'
        ]);

        $purchase = Purchase::create([
            'id_user' => '2',
            'id_store' =>  '5'
        ]);
 
        $purchase = Purchase::create([
            'id_user' => '2',
            'id_store' =>  '6'
        ]);

        $purchase = Purchase::create([
            'id_user' => '2',
            'id_store' =>  '7'
        ]);

        $purchase = Purchase::create([
            'id_user' => '2',
            'id_store' =>  '8'
        ]);
    }
}
