<?php

namespace Database\Factories;

use App\Models\Country;
use App\Models\Organization;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'organization_id' => Organization::all()->random()->id,
            'email' => $this->faker->email,
            'phone' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
            'city' => $this->faker->sentence(),
            'state' => $this->faker->state,
            'country_id' => Country::all()->random()->id,
            'postal_code' => $this->faker->postcode,
        ];
    }
}
