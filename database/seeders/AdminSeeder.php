<?php

namespace Database\Seeders;

use App\Models\CMS\Admins;
use Database\Factories\AdminsFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admins::factory()->count(3)->create();
    }
}
