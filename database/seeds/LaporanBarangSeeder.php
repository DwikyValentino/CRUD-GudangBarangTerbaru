<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class LaporanBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
 
    	for($i = 1; $i <= 25; $i++){
 
    	      // insert data ke table product menggunakan Faker
    		DB::table('laporanbarang')->insert([
                'kodebarang' => $faker->name,
                'namabarang' => $faker->name,
                'stokawal' => $faker->numberBetween(1,200),
                'barang_masuk' => $faker->numberBetween(1,200),
                'barang_keluar' => $faker->numberBetween(1,200),
    		    'stokakhir' => $faker->numberBetween(1,200)
    		]);
 
    	}
    }
}
