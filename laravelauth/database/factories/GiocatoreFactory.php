<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Giocatore;
use Faker\Generator as Faker;

$factory->define(Giocatore::class, function (Faker $faker) {
    return [
        
        'firstname'=>$faker->firstNameMale,
        'lastname'=>$faker->lastName,
        'age'=>$faker->numberBetween(16, 38),
    ];
});
