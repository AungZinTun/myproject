<?php

$factory->define(App\Township::class, function (Faker\Generator $faker) {
    return [
        "title" => $faker->name,
    ];
});
