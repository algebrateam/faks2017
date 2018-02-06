<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class zupanijaSeeder extends Seeder {

  /**
   * Run the database seeds.
   * php artisan make:seeder zupanijaSeeder
   * 
   * @return void
   */
  public function run() {
    DB::table('zupanijas')->delete();
    DB::table('zupanijas')->insert(
        array(
          array(// row #0
            'id' => 1,
            'naziv' => 'Nepoznata županija',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => NULL,
          ),
          array(// row #1
            'id' => 2,
            'naziv' => 'Zagrebačka',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => '2017-06-09 17:06:41',
          ),
          array(// row #2
            'id' => 3,
            'naziv' => 'Krapinsko-zagorska',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => NULL,
          ),
          array(// row #3
            'id' => 4,
            'naziv' => 'Sisačko-moslavačka',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => NULL,
          ),
          array(// row #4
            'id' => 5,
            'naziv' => 'Karlovačka',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => NULL,
          ),
          array(// row #5
            'id' => 6,
            'naziv' => 'Varaždinska',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => NULL,
          ),
          array(// row #6
            'id' => 7,
            'naziv' => 'Koprivničko-križevačka',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => NULL,
          ),
          array(// row #7
            'id' => 8,
            'naziv' => 'Bjelovarsko-bilogorska',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => NULL,
          ),
          array(// row #8
            'id' => 9,
            'naziv' => 'Primorsko-goranska',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => NULL,
          ),
          array(// row #9
            'id' => 10,
            'naziv' => 'Ličko-senjska',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => NULL,
          ),
          array(// row #10
            'id' => 11,
            'naziv' => 'Virovitičko-podravska',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => NULL,
          ),
          array(// row #11
            'id' => 12,
            'naziv' => 'Požeško-slavonska',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => NULL,
          ),
          array(// row #12
            'id' => 13,
            'naziv' => 'Brodsko-posavska',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => NULL,
          ),
          array(// row #13
            'id' => 14,
            'naziv' => 'Zadarska',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => NULL,
          ),
          array(// row #14
            'id' => 15,
            'naziv' => 'Osječko-baranjska',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => NULL,
          ),
          array(// row #15
            'id' => 16,
            'naziv' => 'Šibensko-kninska',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => NULL,
          ),
          array(// row #16
            'id' => 17,
            'naziv' => 'Vukovarsko-srijemska',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => NULL,
          ),
          array(// row #17
            'id' => 18,
            'naziv' => 'Splitsko-dalmatinska',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => NULL,
          ),
          array(// row #18
            'id' => 19,
            'naziv' => 'Istarska',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => NULL,
          ),
          array(// row #19
            'id' => 20,
            'naziv' => 'Dubrovačko-neretvanska',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => NULL,
          ),
          array(// row #20
            'id' => 21,
            'naziv' => 'Međimurska',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => NULL,
          ),
          array(// row #21
            'id' => 22,
            'naziv' => 'Grad Zagreb',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => NULL,
          )
        )
    );
  }

}
