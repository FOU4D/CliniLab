<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class InstitutionFakerSeeder extends Seeder
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
    	foreach (range(1,15) as $index) {
	        DB::table('institutions')->insert([
		    'type' => $faker->randomElement(['NGO', 'Syndicate', 'Religious', 'Government', 'Other']),
		    'relation' => $faker->randomElement(['Vendor', 'Supplier', 'Contact', 'Client', 'Partner']),
	            'name' => $faker->company,
	            'email' => $faker->email,
		    'website' => $faker->domainName,
	            'phone' => $faker->e164PhoneNumber,
		    'description' => $faker->realText($maxNbChars = 200, $indexSize = 2),
		    'notes' => $faker->realText($maxNbChars = 500, $indexSize = 2),
		    'created_at' => $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now', $timezone = null),
	        ]);
	}
    }
}
