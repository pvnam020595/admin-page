<?php

namespace Database\Factories\Admins;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Admins\Roles;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class RolesFactory extends Factory
{
    protected $model = Roles::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'is_active' => 1,
        ];
    }
}
