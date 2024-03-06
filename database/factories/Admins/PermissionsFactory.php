<?php

namespace Database\Factories\Admins;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Admins\Permissions;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PermissionsFactory extends Factory
{
    // protected $model = Permissios::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $permission = ['Edit', 'Create', 'View', 'Report', 'Edit User'];
        foreach($permission as $item) {
            return [
                'name' => $item,
                'is_active' => 1,
            ];
        }
    }
}
