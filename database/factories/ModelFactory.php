<?php

use Faker\Generator as Faker;

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Book::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(5),
        'year' => $faker->year,
        'description' => $faker->sentence(30),
        'slug' => $faker->slug,
    ];
});

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(5),
        'description' => $faker->sentence(30),
        'slug' => $faker->slug,
        'book_id' => factory(App\Book::class)->create()->id
    ];
});

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'body' => $faker->sentence(10),
        'vote' => $faker->numberBetween(1,5),
        'post_id' => factory(App\Post::class)->create()->id,
        'user_id' => factory(App\User::class)->create()->id
    ];
});