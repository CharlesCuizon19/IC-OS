<?php

namespace Database\Seeders;

use App\Models\role_descriptions;
use App\Models\roles;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleDescriptionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role_arr = [
            'Admin',
            'Member',
        ];

        for ($i = 0; $i < count($role_arr); $i++) {
            $role_description = role_descriptions::create(
                [
                    'description' => $role_arr[$i],
                ]
            );

            $role = roles::create(
                [
                    'role_description_id' => $role_description->id,
                ],
            );
        }
    }
}
