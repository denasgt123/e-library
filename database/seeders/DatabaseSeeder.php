<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run()
	{
		// \App\Models\User::factory(10)->create();
		$this->call(RoleSeeder::class);
		$this->call(BookStatusSeeder::class);
		$this->call(BookSeeder::class);
		$this->call(UserSeeder::class);
		$this->call(AnggotaSeeder::class);
		$this->call(BorrowStatusSeeder::class);
	}
}
