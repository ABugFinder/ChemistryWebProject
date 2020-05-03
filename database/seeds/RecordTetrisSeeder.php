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
            'record' => 0,
            'id_user' => '1'
        ]);

        $record = RecordTetris::create([
            'top' => 1,
            'record' => 0,
            'id_user' => '1'
        ]);

        $record = RecordTetris::create([
            'top' => 1,
            'record' => 0,
            'id_user' => '1'
        ]);
    }
}
