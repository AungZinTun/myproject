<?php

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        "name" => $faker->name,
        "email" => $faker->safeEmail,
        "password" => str_random(10),
        "role_id" => factory('App\Role')->create(),
        "remember_token" => $faker->name,
        "township_id" => factory('App\Township')->create(),
        "phone" => $faker->name,
        "health_facility" => $faker->name,
    ];
});
