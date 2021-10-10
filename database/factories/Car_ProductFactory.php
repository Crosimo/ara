<?php

namespace Database\Factories;

use App\Models\Car;
use App\Models\Car_Product;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class Car_ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Car_Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "car_id" =>$this->faker->numberBetween(1, count(Car::all())),
            "product_id" =>$this->faker->numberBetween(1, count(Product::all())),
        ];
    }
}
