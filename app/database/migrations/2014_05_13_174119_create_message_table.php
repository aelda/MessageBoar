<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessageTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('guestbook',function($table){
		$table->increments('id');
		$table->string('name');
		$table->text('memo');
		$table->timestamps();
		$table->string('account');
		$table->string('password');
	
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('guestbook');
	}

}
