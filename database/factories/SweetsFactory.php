<?php

namespace Database\Factories;

use App\Models\Sweets;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SweetsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Sweets::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           'user_id' => $this->faker->id(),
            'body' => $this->faker->sentence(),
        ];
    }
}
?>
