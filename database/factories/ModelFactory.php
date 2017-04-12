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

$factory->define(CodeProject\Entities\User::class, function ($faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => str_random(10),
        'remember_token' => str_random(10),
    ];
});

$factory->define(\CodeProject\Entities\Client::class, function (Faker\Generator $faker){
    return [
        'name' => $faker->name,
        'responsible' => $faker->name,
        'email' => $faker->email,
        'phone' => $faker->phoneNumber,
        'address' => $faker->address,
        'obs' => $faker->sentence,
    ];
});
$factory->define(\CodeProject\Entities\Project::class, function (Faker\Generator $faker){
    return [
        'owner_id' => rand(1,5),
        'client_id' => rand(1,5),
        'name' => $faker->name,
        'description' => $faker->sentence,
        'progress' => rand(1,100),
        'status' => rand(1,3),
        'duo_date' => $faker->dateTime('now'),
    ];
});
$factory->define(\CodeProject\Entities\ProjectNote::class, function (Faker\Generator $faker){
    return [
        'project_id' => rand(1,5),
        'title' => $faker->word,
        'note' => $faker->sentence
    ];
});
