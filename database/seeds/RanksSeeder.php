<?php

use Illuminate\Database\Seeder;

class RanksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('ranks')->insert([
          ['name' => 'Admin'],
          ['name' => 'Shopkeeper'],
          ['name' => 'Visitor']
      ]);
    }
}
