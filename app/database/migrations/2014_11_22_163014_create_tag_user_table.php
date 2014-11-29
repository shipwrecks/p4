<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
			Schema::create('user_tag', function($table) {
				$table->integer('user_id')->unsigned();
				$table->integer('tag_id')->unsigned();
 
 				$table->foreign('user_id')->references('id')->on('users');
				$table->foreign('tag_id')->references('id')->on('tags');
				});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tag_user');
	}

}
