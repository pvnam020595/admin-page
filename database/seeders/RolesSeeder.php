<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admins\Roles;
use App\Models\Admins\Admin;
use App\Models\Admins\Modules;
use App\Models\Admins\Permissions;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Roles::factory()->count(3)
            ->hasAdmins(1) // One-to-many
            ->has(Permissions::factory()) // Many-to-many
            ->has(Modules::factory()) // Many-to-many
            ->create();
    }
}
