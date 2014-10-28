<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('books',function($table)
		{
			$table->increments('id');
			$table->integer('id_user',10);
			$table->integer('id_res',10);
			$table->string('date',15);
			$table->string('time_in',10);
			$table->string('time_out',10);
			$table->integer('amount',10);
			$table->integer('area',10);
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
		Schema::drop('books');
	}

}
