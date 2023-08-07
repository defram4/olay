<?php

namespace Database\Factories;

use App\Models\Inbox;
use Illuminate\Database\Eloquent\Factories\Factory;

class InboxFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Inbox::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'title' => $this->faker->sentence,
            'email' => $this->faker->email,
            'phone' => $this->faker->phoneNumber,
            'message' => $this->faker->text

        ];
    }
}
