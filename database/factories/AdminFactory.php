<?php

namespace Database\Factories;

use App\Models\Admin;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdminFactory extends Factory
{
    protected $model = Admin::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'gender' => mt_rand(1, 2),
            'email_verified_at' => date('Y-m-d H:i:s'),
            'password' => '$2y$10$92IXUNpsdO0rOQ5byMi.Ye4oKwea3Ro9llC/.og/at2.uheWG/igi',
            'address' => $this->faker->address,
            'tel' => $this->faker->phoneNumber,
        ];
    }
}
