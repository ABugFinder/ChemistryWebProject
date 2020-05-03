<?php

use Illuminate\Database\Seeder;
use App\RecordMemorama;

class RecordMemoramaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $record = RecordMemorama::create([
            'top' => 1,
            'record' => 0,
            'id_user' => '1'
        ]);

        $record = RecordMemorama::create([
            'top' => 1,
            'record' => 0,
            'id_user' => '1'
        ]);

        $record = RecordMemorama::create([
            'top' => 1,
            'record' => 0,
            'id_user' => '1'
        ]);
    }
}
