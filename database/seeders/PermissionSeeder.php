<?php

namespace Database\Seeders;

use App\Models\Admins\Permissions;
use App\Models\Admins\Roles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Permissions::factory()->has(Roles::factory())->count(3)
            ->create();
    }
}
