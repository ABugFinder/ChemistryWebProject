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
            'id_store' =>  '1'
        ]);
    }
}
