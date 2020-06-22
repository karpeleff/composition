<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'date' => $faker->text(30),
        'count' => $faker->text(30)
    ];
});
