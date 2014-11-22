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
			# AI, PK
			$table->increments('id');
			# created_at, updated_at columns
			$table->timestamps();
			# General data...
			$table->string('task_name');
			$table->integer('user_id')->unsigned(); # Important! FK has to be unsigned because the PK it will reference is auto-incrementing
			$table->text('notes');
			$table->boolean('done');
			$table->date('due_date');
			# Define foreign keys...
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
