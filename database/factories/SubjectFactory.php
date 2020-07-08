<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Subject;
use Faker\Generator as Faker;

$factory->define(Subject::class, function (Faker $faker) {
    return [
        'code' => $faker->city,
        'name' => $faker->streetName,
        'description' => $faker->sentence(6),
        'subject_menu' => $faker->sentence(8)
    ];
});

/*$factory->afterCreating(Subject::class, function ($subject, $faker) {
    $subject->classrooms()->save(factory(Classroom::class))->make();
});*/
