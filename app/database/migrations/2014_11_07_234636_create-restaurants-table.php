<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestaurantsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('restaurants',function($table)
		{
			$table->increments('id');
			$table->string('id_owner',10);
			$table->string('name_pic',255);
			$table->string('name',255);
			$table->string('addr',255)->unuiqe();
			$table->string('day',100);
			$table->string('time_open',15);
			$table->string('time_close',15);
			$table->string('area',255);
			$table->string('seat',255);
			$table->string('tel',15)->unuiqe();
			$table->timestamps();
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
		Schema::drop('restaurants');
	}

}
