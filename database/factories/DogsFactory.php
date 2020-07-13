<?php

use App\Dogs;
use Faker\Generator as Faker;


$factory->define(App\Dogs::class, function (Faker\Generator $faker) {
    return [
        'name'	=> $faker->firstName,
    ];
});
