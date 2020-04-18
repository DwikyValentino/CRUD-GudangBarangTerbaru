<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class LaporanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create('id_ID');
 
    	for($i = 1; $i <= 100; $i++){
 
    	      // insert data ke table product menggunakan Faker
    		DB::table('laporanbarang')->insert([
                'kodebarang' => $faker->numberBetween(7,107),
                'namabarang' => $faker->name,
                'stokawal' => $faker->numberBetween(5000,50000),
                'barang_masuk' => $faker->numberBetween(4000,70000),
                'barang_keluar' => $faker->numberBetween(1,100),
        	    'stokakhir' => $faker->numberBetween(100,200)
    		]);
    }
    }
}