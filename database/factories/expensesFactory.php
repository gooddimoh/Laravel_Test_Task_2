<?php

namespace Database\Factories;

use App\Models\Expenses;
use Illuminate\Database\Eloquent\Factories\Factory;

class expensesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Expenses::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
        ];
    }
}
