<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChefsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('chefs', function (Blueprint $table) {
			$table->id();
			$table->string('name');
			//enum sluzi da definise samo polja koja smiju da budu vrijednost kolone
			$table->enum('activity', ['active', 'deactive'])->default('active');
			$table->unsignedBigInteger('pizza_id');
			$table->foreign('pizza_id')->references('id')->on('pizzas');
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
		Schema::dropIfExists('chefs');
	}
}
