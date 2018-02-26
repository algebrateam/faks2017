<?php

use App\Mjesto;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class studSeeder extends Seeder {

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run() {
    $faker = Factory::create();
    $m = new Mjesto;
    DB::table('studs')->delete();
    DB::table('studs')->insert(
      [
        array(// row #0
          'imestud' => $faker->firstName,
          'prezstud' => $faker->lastName,
          // $table->char('prezstud',40);
          'pbrrod' => $m->inRandomOrder()->first()->pbr,
          //'pbrstan'=>$faker->numberBetween(1,281),
          'pbrstan' => App\Mjesto::inRandomOrder()->first()->pbr,
          'datrodstud' => $faker->dateTimeBetween($startDate = '-28 years', $endDate = '-18 years', $timezone = null),
          // 2512982654321 ddmmyyyxxxxxx
          'jmbgstud' => '2512982' . $faker->numberBetween(111111, 777777),
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ),
           array(// row #0
          'imestud' => $faker->firstName,
          'prezstud' => $faker->lastName,
          // $table->char('prezstud',40);
          'pbrrod' => $m->inRandomOrder()->first()->pbr,
          //'pbrstan'=>$faker->numberBetween(1,281),
          'pbrstan' => App\Mjesto::inRandomOrder()->first()->pbr,
          'datrodstud' => $faker->dateTimeBetween($startDate = '-28 years', $endDate = '-18 years', $timezone = null),
          // 2512982654321 ddmmyyyxxxxxx
          'jmbgstud' => '2512982' . $faker->numberBetween(111111, 777777),
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ),
      ]
    );
  }

}
