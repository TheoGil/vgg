<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNerdsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('nerds', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('name', 255);
			$table->string('email', 255);
			$table->integer('nerd_level');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('nerds', function(Blueprint $table)
		{
			//
		});
	}

}
