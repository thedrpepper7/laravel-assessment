<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Company;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */


class CompanyFactory extends Factory
{   

    protected $model = Company::class;

    public function definition(): array 
    {
        return [
            'name' => $this->faker->company(),
            'email' => $this->faker->unique()->companyEmail(),
            'logo' => 'logos/' . $this->faker->image('storage/app/public/logos', 100, 100, null, false),
            'website' => $this->faker->url(),
        ];

    }
}
