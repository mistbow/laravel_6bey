<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UsersTableSeeder');
		$this->call('TopicsTableSeeder');
		$this->call('RepliesTableSeeder');
		$this->call('QuestionsTableSeeder');
		// $this->call('TagsTableSeeder');
		// $this->call('Question_tagsTableSeeder');
	}

}