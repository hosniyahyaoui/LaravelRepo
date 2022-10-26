<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\odel=Association>
 */
class AssociationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "association_name"=>$this->faker->name(20),
            "association_location"=>$this->faker->name(20),
            "association_status"=>$this->faker->name(20),
            "association_phone_number"=>$this->faker->name(20),
        ];
    }
}
