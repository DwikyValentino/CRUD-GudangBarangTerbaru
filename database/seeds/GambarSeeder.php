<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class GambarSeeder extends Seeder
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
    		DB::table('gambar')->insert([
                'gambar' => $faker->numberBetween(10,20),
                'namabarang' => $faker->name,
    		    'keterangan' => $faker->name
    		]);
 
    	}
    }
}
