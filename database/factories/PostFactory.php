<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
      'title' => $faker->name,
      'description' => $faker->text,
      'content' => $faker->text,
      'img' => $faker->randomDigit(1),
      'publication_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
      'views' => $faker->randomDigit(10),
      'featured' => $faker->numberBetween($min = 0, $max = 1),
      'category_id' => $faker->numberBetween($min = 1, $max = 4),
      'post_state_id' => $faker->numberBetween($min = 0, $max = 1),
    ];
});
