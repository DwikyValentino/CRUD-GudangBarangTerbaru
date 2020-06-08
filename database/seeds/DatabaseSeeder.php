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
<<<<<<< HEAD
        // $this->call(UsersTableSeeder::class);
        $this->call(PersediaanBarangSeeder::class);
        $this->call(BarangTakTerpakaisSeeder::class);
        $this->call(PersediaanAkhirs::class);
        $this->call(LaporanBarangs::class);
=======
        $this->call(BarangTakTerpakaisSeeder::class);
        $this->call(LaporanTableSeeder::class);
        $this->call(PersediaanAkhirSeeder::class);
        $this->call(PersediaanBarangSeeder::class);
        $this->call(UserSeeder::class);
>>>>>>> 30516eb37fec550e4877ce437a72fa061826eea4
    }
}
