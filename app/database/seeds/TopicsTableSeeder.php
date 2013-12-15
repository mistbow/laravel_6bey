<?php

class TopicsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('topics')->truncate();

		$topics = array(
			array(
				'title' => '第一篇帖子', 'body' => '第一篇帖子的内容','reply_at' => time(),
			),
			array(
				'title' => '第二篇帖子', 'body' => '第二篇帖子的内容','reply_at' => time(),
			),
			array(
				'title' => '第三篇帖子', 'body' => '第三篇帖子的内容','reply_at' => time(),
			),
			array(
				'title' => '第四篇帖子', 'body' => '第四篇帖子的内容','reply_at' => time(),
			),
			array(
				'title' => '第五篇帖子', 'body' => '第五篇帖子的内容','reply_at' => time(),
			),
			array(
				'title' => '第六篇帖子', 'body' => '第六篇帖子的内容','reply_at' => time(),
			),
		);

		// Uncomment the below to run the seeder
		DB::table('topics')->insert($topics);
	}

}
