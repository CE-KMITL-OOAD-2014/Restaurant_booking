<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestaurantTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('restaurant',function($table)
		{
			$table->increments('id');
			$table->string('name',128);
			$table->string('addr',300)->unique();
			$table->string('day',15);
			$table->string('time_open',10);
			$table->string('time_close',10);
			$table->string('tel',15)->unique();
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
		Schema::drop('restaurant');
	}

}
