<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tasks', function($table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('task_name');
			$table->integer('user_id')->unsigned();  
			$table->text('notes');
			$table->boolean('done');
			$table->date('due_date');
			
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
		Schema::drop('tasks');
	}

}
