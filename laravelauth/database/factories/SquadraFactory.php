<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Squadra;
use Faker\Generator as Faker;

$factory->define(Squadra::class, function (Faker $faker) {
    return [
        
        'name'=>$faker->city,
        'points'=>$faker->numberBetween(5, 100),
    ];
});
