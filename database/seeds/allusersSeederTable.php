<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class allusersSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for($i=1 ; $i < 11 ; $i++){
            DB::table('allusers')->insert([
               'name'=> $faker->name(10),
               'email_id'=>$faker->email,
            ]);
        }    
    }
}
