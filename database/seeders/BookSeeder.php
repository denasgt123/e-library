<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		// Book::factory()->create(10);
		$datas = [
			[
				'title' => 'My Book',
				'creator' => 'Denassyah Nur Rohman',
				'publisher' => 'Denas Factory',
				'publish_date' => '2021',
				'photo' => 'myBook.jpg',
				'status_id' => '1',
				'location' => 'Slice of Life Section, 2nd Rack, 2nd Row'
			],
			[
				'title' => 'My Book2',
				'creator' => 'Denassyah Nur Rohman2',
				'publisher' => 'Denas Factory2',
				'publish_date' => '2021',
				'photo' => 'myBook.jpg',
				'status_id' => '1',
				'location' => 'Slice of Life Section, 2nd Rack, 2nd Row'
			]
		];

		foreach ($datas as $key => $value) {
			Book::create($value);
		}
	}
}
