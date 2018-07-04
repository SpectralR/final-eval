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
        [
            'name' => 'Tama Charcoal Mist',
            'price' => 399.99,
            'quantity' => 5,
        ],
        [
            'name' => 'Stagg 7A Maple Nylon',
            'price' => 4,
            'quantity' => 20,
        ],
        [
            'name' => 'Pearl Peau Mesh 10" Silencieuse',
            'price' => 7.20,
            'quantity' => 10,
        ]
      );
    }
}
