<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Author::class, function (Faker $faker) {
    return [
        "author_name" => $faker->name
    ];
});
$factory->define(App\Nxb::class, function (Faker $faker) {
    return [
        "nxb_name" => $faker->unique()->company
    ];
});
$factory->define(App\Book::class, function (Faker $faker) {
    return [
        "book_name" => $faker->unique()->realText(150),
        "author_id" => $faker->randomFloat(0,1,100),
        "nxb_id" => $faker->randomFloat(0,1,100),
        "qty" => $faker->randomFloat(0,1,1000)
    ];
});