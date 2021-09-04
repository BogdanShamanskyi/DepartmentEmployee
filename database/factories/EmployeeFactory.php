<?php

namespace Database\Factories;

use App\Models\Department;
use App\Models\Employee;
use App\Models\Position;
use App\Models\Salary;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'birthday' => $this->faker->dateTimeBetween('-30 years', '-15 years'),
            'position_id' => $this->faker->randomElement(Position::all()->pluck('id')),
            'department_id' => $this->faker->randomElement(Department::all()->pluck('id')),
            'salary_id' => $this->faker->randomElement(Salary::all()->pluck('id')),
        ];
    }
}
