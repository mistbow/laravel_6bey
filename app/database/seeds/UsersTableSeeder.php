<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('users')->truncate();

		$users = array(
			array(
				'id' => 1,
                'username' => 'calvin',
                'email' => '117064092@qq.com',
                'password' => Hash::make('1234'),
                'active' => 1,
                'created_at' => new \Carbon\Carbon,
                'updated_at' => new \Carbon\Carbon,
			),
			array(
				'id' => 2,
                'username' => 'kevin',
                'email' => '784793116@qq.com',
                'password' => Hash::make('1234'),
                'active' => 1,
                'created_at' => new \Carbon\Carbon,
                'updated_at' => new \Carbon\Carbon,
			),
			
		);

		// Uncomment the below to run the seeder
		DB::table('users')->insert($users);
	}

}
