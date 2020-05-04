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
            'record' => 117000,
            'id_user' => '2'
        ]);

        $record = RecordMemorama::create([
            'top' => 2,
            'record' => 69000,
            'id_user' => '4'
        ]);

        $record = RecordMemorama::create([
            'top' => 3,
            'record' => 33000,
            'id_user' => '3'
        ]);
    }
}
