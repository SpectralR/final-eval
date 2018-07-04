<?php

use Illuminate\Database\Seeder;

class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('items')->insert(
        [[
            'name' => 'Tama Charcoal Mist',
            'price_id' => 1,
            'quantity' => 5,
        ],
        [
            'name' => 'Stagg 7A Maple Nylon',
            'price_id' => 2,
            'quantity' => 20,
        ],
        [
            'name' => 'Pearl Peau Mesh 10" Silencieuse',
            'price_id' => 3,
            'quantity' => 10,
        ]]
      );
    }
}
