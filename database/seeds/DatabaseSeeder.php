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
        // $this->call(UsersTableSeeder::class);
        $this->call(PersediaanBarangSeeder::class);
        $this->call(BarangTakTerpakaisSeeder::class);
        $this->call(PersediaanAkhirs::class);
        $this->call(LaporanBarangs::class);
    }
}
