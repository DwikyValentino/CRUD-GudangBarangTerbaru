<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class PersediaanAkhirsSeeder extends Seeder
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
 
    	      // insert data ke table persediaanbarang menggunakan Faker
    		DB::table('persediaanakhirs')->insert([
    			'kode_barang' => $faker->name,
                'nama_barang' => $faker->name,
                'tanggal' => $faker->date,
                'harga_pokok' => $faker->numberBetween(1000,200000),
                'harga_jual' => $faker->numberBetween(1000,200000),
                'jumlah_awal' => $faker->numberBetween(1,200),
                'jumlah_penjualan' => $faker->numberBetween(1,200),
                'jumlah_masuk' => $faker->numberBetween(1,200),
    			'total' => $faker->numberBetween(1,200)
    		]);
 
    	}
 
    }
}
