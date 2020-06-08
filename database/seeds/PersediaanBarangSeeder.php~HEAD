<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class PersediaanBarangSeeder extends Seeder
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
    		DB::table('persediaanbarang')->insert([
    			'kodebarang' => $faker->name,
                'namabarang' => $faker->name,
                'hargapokok' => $faker->numberBetween(1000,200000),
                'hargajual' => $faker->numberBetween(1000,200000),
                'jumlah' => $faker->numberBetween(1,200),
    			'nilai' => $faker->numberBetween(1,200)
    		]);
 
    	}
 
    }
}
