<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class BarangTakTerpakaisSeeder extends Seeder
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
 
    	      // insert data ke table barangtakterpakais menggunakan Faker
    		DB::table('barangtakterpakais')->insert([
    			'kodebarang' => $faker->name,
    			'namabarang' => $faker->name,
    			'tanggal' => $faker->date,
    			'umur' => $faker->address
    		]);
 
    	}
 
    }
}
