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
        // $this->call(UsersTableSeeder::class);
        // DB::statement('SET FOREIGN_KEY_CHECKS=0');
        // $this->call(product_mastersTableSeeder::class);
        $this->call(user_listsTableSeeder::class);
        //  DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
