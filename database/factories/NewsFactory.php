<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\News;
use App\User;
use Faker\Generator as Faker;

$factory->define(News::class, function (Faker $faker) {
    return [
        'user_id' => factory(User::class)->create(),
        'title' =>$faker->sentence(2),
        'content'=> $faker->text(400),
    ];
});
