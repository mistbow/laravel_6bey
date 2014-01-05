<?php

class TagsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('tags')->truncate();

		$tags = array(
			array (
				'id' => 1, 
				'tag' => '数学', 
				'tag_friendly' => 'math',
			),
			array (
				'id' => 2, 
				'tag' => '语文', 
				'tag_friendly' => 'yuwen',
			),
		);

		// Uncomment the below to run the seeder
		DB::table('tags')->insert($tags);
	}

}
