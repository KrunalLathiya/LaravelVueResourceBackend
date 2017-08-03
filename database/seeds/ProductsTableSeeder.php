<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \DB::table('products')->insert([
          'name' => str_random(10),
          'price' => rand()
      ]);
      \DB::table('products')->insert([
          'name' => str_random(10),
          'price' => rand()
      ]);
      \DB::table('products')->insert([
          'name' => str_random(10),
          'price' => rand()
      ]);
      \DB::table('products')->insert([
          'name' => str_random(10),
          'price' => rand()
      ]);
      \DB::table('products')->insert([
          'name' => str_random(10),
          'price' => rand()
      ]);
      \DB::table('products')->insert([
          'name' => str_random(10),
          'price' => rand()
      ]);
      \DB::table('products')->insert([
          'name' => str_random(10),
          'price' => rand()
      ]);
    }
}
