<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $this->call('UsersSeeder');
       $this->call('CategorysSeeder');
       $this->call('RanksSeeder');
       $this->call('ItemsSeeder');
       $this->call('category_itemSeeder');
    }
}
