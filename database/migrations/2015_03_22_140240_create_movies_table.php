<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		/**
		 * Skapar tabellen "movies" med tillhörande kolumner.
		 */
		Schema::create('movies', function(Blueprint $table)
		{
			$table->increments('id');
      $table->string('title', 30);
      $table->string('slug', 20);
      $table->text('summary');
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
		Schema::drop('movies');
	}

}
