<?php

class UsersTableSeeder extends Seeder {

	public function run(){
		DB::table('users')->delete();

		$users = array(
			array(
				'name' => 'Alex',
				'password' => Hash::make('garret'),
				'email' => 'somone@someone.com'

				),

			array(
				'name' => 'Billy',
				'password' => Hash::make('garret'),
				'email' => 'somone@someone.com'

				)

			);

		DB::table('users')->insert($users);
	}
}