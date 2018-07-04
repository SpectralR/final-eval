<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
        [
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('0000'),
            'rank_id' => 1,
        ],
        [
            'name' => 'Morgan',
            'email' => 'm@gmail.com',
            'password' => bcrypt('1111'),
            'rank_id' => 2,
        ],
        [
            'name' => 'Jaques',
            'email' => 'j@gmail.com',
            'password' => bcrypt('secret'),
            'rank_id' => 3,
        ]
      ]);
    }
}
