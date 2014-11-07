<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration {

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
			$table->string('id_res',10);
			$table->string('id_user',10);
			$table->string('date',20);
			$table->string('amout',10);
			$table->string('time',15);
			$table->string('area',255);
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
		Schema::drop('books');
	}

}
