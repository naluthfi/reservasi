<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Items::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->text,
        'quantity' => $faker->numberBetween(1, 10),
        'type' => \App\Models\Items::TYPE_ITEM
    ];
});
