<?php

use Illuminate\Database\Seeder;

class CategorysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('categories')->insert([
        ['name' => 'Consumable'],
        ['name' => 'Instrument'],
        ['name' => 'Drums']
      ]);
    }
}
