<?php

class QuestionTagsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('question_tags')->truncate();

		$question_tags = array(
			array(
				'question_id' => 1,
				'tag_id' => 1,
			),
			array(
				'question_id' => 1,
				'tag_id' => 2,
			),
			array(
				'question_id' => 2,
				'tag_id' => 2,
			),
		);

		// Uncomment the below to run the seeder
		DB::table('question_tags')->insert($question_tags);
	}

}
