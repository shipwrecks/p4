<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuggestionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('suggestions', function($table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('subject');
			$table->integer('user_id')->unsigned();  
			$table->text('suggestion_text');
			
			$table->foreign('user_id')->references('id')->on('users');
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('suggestions');
	}

}
