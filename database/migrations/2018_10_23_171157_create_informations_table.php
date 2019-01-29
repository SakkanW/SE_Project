<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('informations', function(Blueprint $table)
		{
			$table->increments('id');
			//$table->string('id_info',20)->unique();
			$table->string('firstname', 40);
			$table->string('lastname', 40);
			$table->string('id_card', 25)->unique();
			$table->string('sex', 10);
			$table->string('status', 30);
			$table->string('tel', 20);
			$table->string('years', 10)->default('-');
			$table->string('faculty', 30);
			$table->string('person_tel', 30);
			$table->string('person_name', 30);
			$table->string('closefriend_tel',30 );
			$table->string('closefriend_name', 30);
			$table->string('his_psychiatry', 30);
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
		Schema::drop('informations');
	}

}
