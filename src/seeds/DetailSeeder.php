<?php

namespace Laravel\ToDoList;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i=0;$i<=10;$i++){
        	DB::table(config('todolist.table_name'))->insert([
        		'topic'=>$faker->topic,
        		'description'=>$faker->description
        	]);
        }
    }
}
