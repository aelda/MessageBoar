<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDropTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('guestbook', function($table)
		{
		    $table->dropColumn('page');
			$table->dropColumn('limit');
		    $table->dropColumn('totalItems');
			$table->dropColumn('items');
		});
		 
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('guestbook', function($table){
		$table->string('page');
		$table->string('limit');
		$table->string('totalItems');
		$table->string('items');
		});
	
	}

}
