<?php

class RepliesTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('replies')->truncate();

		$replies = array(
			array(
				'id' => 1, 'topic_id' => 1, 'body' => '第一篇帖子的回复内容', 'created_at' => new DateTime,'updated_at' => new DateTime,
			),
			array(
				'id' => 2, 'topic_id' => 1, 'body' => '第二篇帖子的回复内容', 'created_at' => new DateTime,'updated_at' => new DateTime,
			),
			array(
				'id' => 3, 'topic_id' => 2, 'body' => '第三篇帖子的回复内容', 'created_at' => new DateTime,'updated_at' => new DateTime,
			),
			array(
				'id' => 4, 'topic_id' => 1, 'body' => '第四篇帖子的回复内容', 'created_at' => new DateTime,'updated_at' => new DateTime,
			),
		);

		// Uncomment the below to run the seeder
		// DB::table('replies')->insert($replies);
	}

}
