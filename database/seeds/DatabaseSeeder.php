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
        $this->call(BarangTakTerpakaisSeeder::class);
        $this->call(GambarSeeder::class);
        $this->call(LaporanBarangSeeder::class);
        $this->call(PersediaanAkhirSeeder::class);
        $this->call(PersediaanBarangSeeder::class);
        $this->call(UserSeeder::class);
    }
}
