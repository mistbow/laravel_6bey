<?php

class TopicsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('topics')->truncate();

		$topics = array(
			array(
				'id' => 1, 'title' => '第一篇帖子', 'body' => '第一篇帖子的内容','user_id' => 1,'reply_at' => new DateTime,'created_at' => new DateTime,'updated_at' => new DateTime,
			),
			array(
				'id' => 2, 'title' => '第二篇帖子', 'body' => '第二篇帖子的内容','user_id' => 1,'reply_at' => new DateTime,'created_at' => new DateTime,'updated_at' => new DateTime,
			),
			array(
				'id' => 3, 'title' => '第三篇帖子', 'body' => '第三篇帖子的内容','user_id' => 1,'reply_at' => new DateTime,'created_at' => new DateTime,'updated_at' => new DateTime,
			),
			array(
				'id' => 4, 'title' => '第四篇帖子', 'body' => '第四篇帖子的内容','user_id' => 2,'reply_at' => new DateTime,'created_at' => new DateTime,'updated_at' => new DateTime,
			),
			array(
				'id' => 5, 'title' => '第五篇帖子', 'body' => '第五篇帖子的内容','user_id' => 2,'reply_at' => new DateTime,'created_at' => new DateTime,'updated_at' => new DateTime,
			),
			array(
				'id' => 6, 'title' => '第六篇帖子', 'body' => '第六篇帖子的内容','user_id' => 2,'reply_at' => new DateTime,'created_at' => new DateTime,'updated_at' => new DateTime,
			),
		);

		// Uncomment the below to run the seeder
		DB::table('topics')->insert($topics);
	}

}
