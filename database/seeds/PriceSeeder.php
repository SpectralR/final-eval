<?php

use Illuminate\Database\Seeder;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('prices')->insert(
        [
          ['price' => 399.99],
          ['price' => 4],
          ['price' => 7.20]
        ]
      );
    }
}
