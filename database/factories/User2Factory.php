<?php

namespace Database\Factories;

use App\Models\user2;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\user2>
 */
class User2Factory extends Factory
{
    protected $model= user2::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'first_name'=> $this->faker->text(30),
            'last_name'=>$this->faker->text(20),
            'status'=>$this->faker->boolean(),
            'phone_number'=> $this->faker->phoneNumber(),
            'details'=>$this->faker->text(50),
        ];
    }
}
