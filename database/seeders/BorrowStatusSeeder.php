<?php

namespace Database\Seeders;

use App\Models\BorrowStatus;
use Illuminate\Database\Seeder;

class BorrowStatusSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$datas = [
			[
				'name' => 'Borrowed',
			],
			[
				'name' => 'Returned',
			],
		];

		foreach ($datas as $key => $value) {
			BorrowStatus::create($value);
		}
	}
}
