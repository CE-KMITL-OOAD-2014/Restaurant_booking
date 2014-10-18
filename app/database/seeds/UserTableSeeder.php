<?php

class UserTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('user')->delete();
		User::create(array(
			'name'     => 'Chris Sevilleja',
			'username' => 'sevilayha',
			'email'    => 'chris@scotch.io',
			'password' => Hash::make('awesome'),
		));
	}

}