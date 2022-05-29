<?php

namespace Database\Seeders;

use App\Models\Anggota;
use Illuminate\Database\Seeder;

class AnggotaSeeder extends Seeder
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
				'nik' => '357803xxxxxxxxxx',
				'name' => 'Denassyah Nur Rohman',
				'dpob' => 'Surabaya, 16-01-2002',
				'gender' => 'Male',
				'blood_type' => 'O',
				'address' => 'Ngagel Mulyo 4/5, RT/RW 003/004, Desa Wonokromo, Kecamatan Wonokromo',
				'city' => 'Surabaya',
				'religion' => 'Islam',
				'is_married' => false,
				'job' => 'Student',
				'nationality' => 'WNI'
			],
			[
				'nik' => '357804xxxxxxxxxx',
				'name' => 'Denassyah Nurrohman',
				'dpob' => 'Surabaya, 16-01-2002',
				'gender' => 'Male',
				'blood_type' => 'O',
				'address' => 'Ngagel Mulyo 4/5, RT/RW 003/004, Desa Wonokromo, Kecamatan Wonokromo',
				'city' => 'Surabaya',
				'religion' => 'Islam',
				'is_married' => false,
				'job' => 'Student',
				'nationality' => 'WNI'
			]
		];

		foreach ($datas as $key => $value) {
			Anggota::create($value);
		}
	}
}
