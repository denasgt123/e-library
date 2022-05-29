<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnggotasTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('anggotas', function (Blueprint $table) {
			$table->id();
			$table->string('name');
			$table->string('dpob');
			$table->string('nik')->unique();
			$table->string('gender');
			$table->string('blood_type');
			$table->string('address');
			$table->string('city');
			$table->string('religion');
			$table->string('job');
			$table->boolean('is_married');
			$table->string('nationality');
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
		Schema::dropIfExists('anggotas');
	}
}
