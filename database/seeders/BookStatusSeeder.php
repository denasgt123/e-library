<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BookStatus;
class BookStatusSeeder extends Seeder
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
                'name' => 'Available',
            ],
            [
                'name' => 'Borrowed',
            ],
        ];

        foreach ($datas as $key => $value) {
            BookStatus::create($value);
        }
    }
}
