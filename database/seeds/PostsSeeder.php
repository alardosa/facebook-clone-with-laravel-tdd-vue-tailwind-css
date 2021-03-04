<?php

use Illuminate\Database\Seeder;
use App\User;
use Faker\Generator as Faker;

use Carbon\Carbon;


class PostsSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Post',50)->create();

    }
}
