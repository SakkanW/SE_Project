<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTreatmentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('treatments', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('informations_id')->unsigned();
			$table->foreign('informations_id')->references('id')->on('informations')->onDelete('cascade');
			$table->string('type_service');
			$table->string('type_nisit');
			$table->string('consult_prob');
			$table->string('consult_level');
			$table->string('helping');
			$table->string('result');
			$table->text('technique');
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
		Schema::drop('treatments');
	}

}
