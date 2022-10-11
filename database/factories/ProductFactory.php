<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\user2;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model= Product::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=> $this->faker->text(30),
            'category'=>$this->faker->text(20),
            'status'=>$this->faker->text(10),
            // 'user_id' => $this->create(user2::class)->id,
            'user_id' => $this->faker->randomElement(user2::pluck('id')),
        ];
    }
}
