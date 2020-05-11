<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\TravelPackage;
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(TravelPackage::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'slug' => $faker->slug,
        'location' => $faker->address,
        'about' => $faker->paragraph,
        'featured_event	' => $faker->event,
        'language' => $faker->language,
        'foods' => $faker->foods,
        'departure_date' => Carbon::now(),
        'duration' => $faker->duration,
        'type' => $faker->type,
        'price' => $faker->price,
    ];
});
