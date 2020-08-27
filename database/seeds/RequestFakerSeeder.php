<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class RequestFakerSeeder extends Seeder
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
    	foreach (range(1,40) as $index) {
	        DB::table('requests')->insert([
                    'test_id' => $faker->numberBetween($min = 1, $max = 220),
		    'visit_id' => $faker->numberBetween($min = 10000005, $max = 10000040),
		    'notes' => $faker->realText($maxNbChars = 200, $indexSize = 2),
		    'sample_status' => $faker->randomElement(['Received', 'Accepted', 'Rejected']),
		    'sample_notes' => $faker->realText($maxNbChars = 200, $indexSize = 2),
		    'created_at' => $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now', $timezone = null),
	        ]);
	}
    }
}
