<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $type = ['Room' , 'Function Hall', 'Cottage', 'Table'];
        return [
            'name' => $this->faker->name(),
            'type' => $this->faker->randomElement($type),
            'reservation_date' => $this->faker->dateTimeBetween('now', '+2 months'),
            'note' => $this->faker->text(50, 1),
        ];
    }
}
