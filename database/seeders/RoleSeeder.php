<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
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
                'name' => 'Superadmin',
            ],
            [
                'name' => 'Admin',
            ]
        ];

        foreach ($datas as $key => $value) {
            Role::create($value);
        }
    }
}
