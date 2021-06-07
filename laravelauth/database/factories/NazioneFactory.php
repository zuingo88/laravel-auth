<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Nazione;
use Faker\Generator as Faker;

$factory->define(Nazione::class, function (Faker $faker) {
    return [
        
        'name'=>$faker->state,
        'continent'=>$faker->randomElement($array = array ('Europa','Asia','Africa','America')),
    ];
});
