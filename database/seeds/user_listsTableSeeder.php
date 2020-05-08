<?php

use App\User_list;
use Illuminate\Database\Seeder;

class user_listsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $faker = Faker\Factory::create('zh_TW');
        User_list::truncate();
        factory(App\User_list::class, 10)->create();

    }
}
