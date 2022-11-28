<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Contact::class;

    public function definition()
    {
        return [
            //
            'name' => $this->faker->name,
            'gender' => rand(1, 2),
            'email' => $this->faker->safeEmail,
            'postcode' => substr_replace($this->faker->postcode, '-', 3, 0),
            'address' => mb_substr($this->faker->address, 9),
            'opinion' => $this->faker->realText,
        ];
    }
}
