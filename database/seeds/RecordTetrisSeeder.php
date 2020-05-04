<?php

use Illuminate\Database\Seeder;
use App\RecordTetris;

class RecordTetrisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $record = RecordTetris::create([
            'top' => 1,
            'record' => 117000,
            'id_user' => '2'
        ]);

        $record = RecordTetris::create([
            'top' => 2,
            'record' => 69000,
            'id_user' => '4'
        ]);

        $record = RecordTetris::create([
            'top' => 3,
            'record' => 33000,
            'id_user' => '3'
        ]);
    }
}
