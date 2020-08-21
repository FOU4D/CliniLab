<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //NEVER NEVER LEAVE DEFAULT PASSWORDS

		App\User::create([
			'name' => 'Global Admin',
			'username' => 'admin',
			'password' => bcrypt('adminpass'),
			'is_admin' => '1',
		]);

		App\User::create([
			'name' => 'General Manager',
			'username' => 'manager',
			'password' => bcrypt('managerpass'),
			'is_admin' => '1',
		]);

		App\User::create([
			'name' => 'Lab Manager',
			'username' => 'labmanager',
			'password' => bcrypt('labmanagerpass'),
			'is_admin' => '1',
		]);

		App\User::create([
			'name' => 'Lab Physician',
			'username' => 'pathologist',
			'password' => bcrypt('pathologistpass'),
			'is_admin' => '1',
		]);

		App\User::create([
			'name' => 'Lab Technician',
			'username' => 'technician',
			'password' => bcrypt('technicianpass'),
			'is_admin' => '1',
		]);

		App\User::create([
			'name' => 'Office Receptionist',
			'username' => 'receptionist',
			'password' => bcrypt('receptionistpass'),
			'is_admin' => '1',
		]);

		App\User::create([
			'name' => 'Demo Patient',
			'username' => 'patient',
			'password' => bcrypt('patientpass'),
			'is_admin' => '0',
		]);

    }
}



