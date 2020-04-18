<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class ProductTableSeeder extends Seeder
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
    		DB::table('product')->insert([
                'kodebarang' => $faker->numberBetween(7,107),
                'namabarang' => $faker->name,
                'hargapokok' => $faker->numberBetween(5000,50000),
                'hargajual' => $faker->numberBetween(4000,70000),
                'jumlah' => $faker->numberBetween(1,100),
        	    'nilai' => $faker->numberBetween(1000000,10000000)
    		]);
 
    	}
    }
}
