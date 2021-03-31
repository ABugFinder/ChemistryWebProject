<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use App\Curiosidades;

class CuriosidadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('curiosidades')->insert([
            'nombre' => 'ejemplo1',
            'contenido' => 'contenido ejemplo',
            'imagen' => 'url imagen'
        ]);
    }
}
