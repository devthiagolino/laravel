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
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Entidades\Livro::class, function (Faker\Generator $faker) {
    return [
        'titulo' => $faker->catchPhrase,
        'resumo' => $faker->text,
        'foto' => $faker->imageUrl(640, 480),
        'editora' => $faker->company,
        'isbn' => $faker->isbn13,
        'altura' => $faker->randomFloat(),
        'profundidade' => $faker->randomFloat(),
        'qtd_paginas' => rand(1,540),
        'idioma' => $faker->lexify,
        'ano_edicao' => rand(2000, 2015),
        'largura' => $faker->randomFloat(),
        'valor' => $faker->randomFloat()
    ];
});

$factory->define(App\Entidades\Autor::class, function (Faker\Generator $faker) {
    return [
        'nome' => $faker->name,
        'email' => $faker->email,
        'foto' => $faker->imageUrl(640, 480),
        'telefone' => $faker->phoneNumber,
        'dt_nascimento' => $faker->date
    ];
});