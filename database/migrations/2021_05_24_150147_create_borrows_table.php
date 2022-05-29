<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBorrowsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('borrows', function (Blueprint $table) {
			$table->id();
			$table->foreignId('anggota_id');
			$table->foreignId('book_id');
			$table->foreignId('status_id');
			$table->dateTime('deadline');
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
		Schema::dropIfExists('borrows');
	}
}
