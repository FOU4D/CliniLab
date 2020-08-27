<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class VisitFakerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();
    	foreach (range(1,20) as $index) {
	        DB::table('visits')->insert([
		    'individual_id' => $faker->numberBetween($min = 10000032, $max = 10000062),
		    'referenced_by' => $faker->name,
		    'notes' => $faker->realText($maxNbChars = 200, $indexSize = 2),
		    'created_at' => $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now', $timezone = null),
	        ]);
	}
    }
}
