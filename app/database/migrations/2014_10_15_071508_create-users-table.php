<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('users',function($table)
		{
			$table->increments('id');
			$table->string('name', 128)->unique();
			$table->string('lastname', 128);
			$table->string('password', 60);
			$table->string('email', 128)->unique();
			$table->string('tel', 15)->unique();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('users');
	}

}
