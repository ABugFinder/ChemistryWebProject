<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use App\MisCuriosidades;

class MisCuriosidadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //aqui se hara el ligue de los elementos que tenga cada usuario
        DB::table('miscuriosidades')->insert([
            'id_user' => 1,
            'id_curiosidad' => 1,
        ]);
    }
}
