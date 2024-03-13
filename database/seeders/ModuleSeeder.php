<?php

namespace Database\Seeders;

use App\Models\Admins\Modules;
use App\Models\Admins\Roles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Modules::factory()->count(3)
            ->has(Roles::factory())
            ->create();
    }
}
