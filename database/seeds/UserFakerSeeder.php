<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserFakerSeeder extends Seeder
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
    	foreach (range(1,30) as $index) {
	        DB::table('individuals')->insert([
		    'salutation' => $faker->randomElement(['Mr', 'Mrs', 'Ms', 'Dr', 'Eng', 'Prof. Dr.']),
		    'gender' => $faker->randomElement(['Male', 'Female']),
	            'name' => $faker->name,
	            'email' => $faker->email,
		    'dob' => $faker->date($format = 'Y-m-d', $max = 'now'),
	            'phone' => $faker->e164PhoneNumber,
		    'bio' => $faker->realText($maxNbChars = 200, $indexSize = 2),
		    'notes' => $faker->realText($maxNbChars = 500, $indexSize = 2),
		    'created_at' => $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now', $timezone = null),
	        ]);
	}
    }
}
