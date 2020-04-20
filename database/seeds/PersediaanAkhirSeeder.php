<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class PersediaanAkhirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
 
    	for($i = 1; $i <= 50; $i++){
 
    	      // insert data ke table product menggunakan Faker
    		DB::table('persediaanakhir')->insert([
                'kode_barang' => $faker->numberBetween(7,107),
                'nama_barang' => $faker->name,
                'tanggal' => $faker->date,
                'harga_pokok' => $faker->numberBetween(5000,50000),
                'harga_jual' => $faker->numberBetween(4000,70000),
                'jumlah_awal' => $faker->numberBetween(1,100),
                'jumlah_penjualan' => $faker->numberBetween(1,100),
                'jumlah_masuk' => $faker->numberBetween(1,100),
        	    'total' => $faker->numberBetween(1000000,10000000)
    		]);
 
    	}
    }
}
