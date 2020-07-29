<?php

/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Compagny::class, static function (Faker\Generator $faker) {
    return [
        'name' => $faker->firstName,
        'lien' => $faker->sentence,
        'image' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
