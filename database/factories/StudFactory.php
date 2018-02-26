<?php
/**
 * @example 'php artisan tinker' factory(App\Stud::class, 50)->create();
 */
use App\Mjesto;
use App\Stud;
use Faker\Generator as Faker;
use Illuminate\Support\Carbon;

$factory->define(Stud::class, function (Faker $faker) {
    return [
          'imestud' => $faker->firstName,
          'prezstud' => $faker->lastName,
          'pbrrod' => Mjesto::inRandomOrder()->first()->pbr,
          'pbrstan' => Mjesto::inRandomOrder()->first()->pbr,
          'datrodstud' => $faker->dateTimeBetween($startDate = '-28 years', $endDate = '-18 years', $timezone = null),
          // 2512982654321 ddmmyyyxxxxxx
          'jmbgstud' => '2512982' . $faker->numberBetween(111111, 777777),
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    ];
});
