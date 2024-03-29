<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        $this->call(ElementSeeder::class);
        $this->call(GameSeeder::class);
        $this->call(GameModeSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(StoreSeeder::class);
        $this->call(PurchasesSeeder::class);
        $this->call(RecordTetrisSeeder::class);
        $this->call(RecordMemoramaSeeder::class);
        $this->call(PurchasesDateSeeder::class);
        $this->call(CuriosidadesSeeder::class);
        
    }
}
