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
		/*Board::create(
			array(
				array(
                     'name' => 'inin',
                     'message' => '第一篇 頭香'
	            ),
                 array(
                     'name' => '硬硬',
                     'message' => '第二篇'
				)
			));*/
		// $this->call('UserTableSeeder');
	}

}
