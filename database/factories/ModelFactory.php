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
        'name' => "Alvaro Rivera",
        'email' => "DeRiveraArenas@gmail.com",
        'password' => bcrypt("Saltosdefe.2010"),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\xcurso::class, function ($faker) {
    return [

        'nombre' => $faker->name,
        'descripcion' => join("\n\n", $faker->paragraphs(mt_rand(3, 6))),
        'imagen' => '',
        'banner' => ''
    ];

});
$factory->define(\App\xarticuloscurso::class, function ($faker) {
    return [

        'imagen' => '',
        'resumen' => join("\n\n", $faker->paragraphs(mt_rand(3, 6))),
        'title' => $faker->name,
        'content' => join("\n\n", $faker->paragraphs(mt_rand(3, 6))),
        'curso_id' => 5,
        'user_id' => 1
    ];

});

$factory->define(\App\xinfeccion::class, function ($faker) {
    return [

        'imagen' => '',
        'resumen' => join("\n\n", $faker->paragraphs(mt_rand(3, 6))),
        'title' => $faker->name,
        'content' => join("\n\n", $faker->paragraphs(mt_rand(3, 6))),
        'user_id' => 1
    ];

});

$factory->define(\App\xlog::class, function ($faker) {
    return [

        'imagen' => '',
        'resumen' => join("\n\n", $faker->paragraphs(mt_rand(3, 6))),
        'title' => $faker->name,
        'content' => join("\n\n", $faker->paragraphs(mt_rand(3, 6))),
        'user_id' => 1
    ];

});

$factory->define(\App\xlte::class, function ($faker) {
    return [

        'imagen' => '',
        'resumen' => join("\n\n", $faker->paragraphs(mt_rand(3, 6))),
        'title' => $faker->name,
        'content' => join("\n\n", $faker->paragraphs(mt_rand(3, 6))),
        'user_id' => 1
    ];

});

$factory->define(\App\xproyecto::class, function ($faker) {
    return [

        'imagen' => '',
        'title' => $faker->name,
        'url' => $faker->url,
    ];

});