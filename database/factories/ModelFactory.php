<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name'           => $faker->name,
        'username'       => $faker->userName,
        'email'          => $faker->safeEmail,
        'password'       => bcrypt(str_random(10)),
        'description'    => $faker->paragraphs(3, true),
        'profile_image'  => $faker->image($dir = public_path() . '/images/profile', $width = 180, $height = 180),
        'cover_image'    => $faker->image($dir = public_path() . '/images/cover', $width = 1800, $height = 500),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Status::class, function (Faker\Generator $faker) {
    return [
        'user_id' => function () {
            return factory(App\User::class)->create()->id;
        },
        'status'  => $faker->paragraphs(3, true)
    ];
});
