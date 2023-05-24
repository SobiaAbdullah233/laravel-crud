<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Registration>
 */
class RegistrationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $state=['Pakistan','India','America','Turkish','Itly'];
        $category=['Premium','Standerd','Ultimate'];
        $contectway=['Phone','Email','Any'];
        return [
            'fname'=>fake()->firstName(),
            'lname'=>fake()->lastName(),
            'address1'=>fake()->streetAddress(),
            'address2'=>fake()->streetAddress(),
            'state'=>$state[rand(0, count($state) - 1)],
            'zip'=>fake(),
            'city'=>fake()->city(),
            'email'=>fake()->unique()->safeEmail(),
            'phone'=>fake()->phoneNumber(),
            'category'=>$category[rand(0,count($category)-1)],
            'contectway'=>$contectway[rand(0,count($contectway)-1)],
        ];
    }
}
