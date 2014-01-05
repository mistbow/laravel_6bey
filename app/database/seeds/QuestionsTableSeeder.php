<?php

class QuestionsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('questions')->truncate();

		$questions = array(
			array(
				'id' => 1, 
				'title' => '第一个提问', 
				'body' => '第一个提问的内容',
				'user_id' => 1,
				'score' => 0,
				'created_at' => new \Carbon\Carbon,
				'updated_at' => new \Carbon\Carbon,
			),
			array(
				'id' => 2, 
				'title' => '第二个提问', 
				'body' => '第二个提问的内容',
				'user_id' => 2,
				'score' => 2,
				'created_at' => new \Carbon\Carbon,
				'updated_at' => new \Carbon\Carbon,
			),
		);

		// Uncomment the below to run the seeder
		DB::table('questions')->insert($questions);
	}

}
