<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Role;
use Illuminate\Support\Str;

class RoleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Role::class;
    public function definition()
    {
        return [
            //
            "name"=>$this->faker->name(),
            "slug"=>Str::slug($this->faker->name()),
            "permission"=>Str::random(4),
            'photo'=>'http://lorempixel.com/640/480/'
        ];
    }
}
