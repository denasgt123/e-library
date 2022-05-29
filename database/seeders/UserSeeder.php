<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
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
				'name' => 'superadmin',
				'email' => 'superadmin@admin.com',
				'password' => Hash::make('asdasdasd'),
				'role_id' => 1
			],
			[
				'name' => 'admin',
				'email' => 'admin@admin.com',
				'password' => Hash::make('qweqweqwe'),
				'role_id' => 2
			]
		];
		foreach ($datas as $key => $value) {
			User::create($value);
		}
	}
}
