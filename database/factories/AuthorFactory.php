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
        "book_name" => $faker->unique()->realText(50),
        "author_id" => $faker->randomFloat(0,1,100),
        "nxb_id" => $faker->randomFloat(0,1,100),
        "qty" => $faker->randomFloat(0,1,1000)
    ];
});
$factory->define(App\Chap::class,function (Faker $faker){
    return [
        "chap_title"=> $faker->realText(100),
        "book_id" => $faker->randomFloat(0,1,100),
    ];
});