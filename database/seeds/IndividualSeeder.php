<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

class IndividualSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
$array = ['Female', 'Male'];
$timestamp = mt_rand(1, time());
$randomDate = date("Y-m-d", $timestamp);
$randomphone = rand(10206541, 155214523654);
	DB::table('individuals')->insert([
		'name' => Str::random(10).' '.Str::random(10),
		//$array = ['Female', 'Male'],
		'gender' => Arr::random($array),
		//$timestamp = mt_rand(1, time()),
		//$randomDate = date("MM-DD-YYY", $timestamp);
		'dob' => $randomDate,
		//$randomphone = rand(10206541, 155214523654);
		'phone' => $randomphone,
	]);
    }
}
