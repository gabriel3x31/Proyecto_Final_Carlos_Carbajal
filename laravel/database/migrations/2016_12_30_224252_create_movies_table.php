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
		Schema::create('movies', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre');
			$table->string('elenco');
			$table->string('direccion');
			$table->string('duracion');
			$table->timestamps();
			$table->integer('genero_id')->unsigned();
			$table->foreign('genero_id')->references('id')->on('generos');
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
