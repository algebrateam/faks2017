<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class zupanijaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('zupanijas')->delete();
        DB::table('zupanijas')->insert(
            array(
              array(
               'naziv'=>'Nepoznata županija',
               'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
               'updated_at'=>NULL
              ),
              array(
               'naziv'=>'Zagrebačka',
               'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
               'updated_at'=>NULL
              ),

              array(
               'naziv'=>'Krapinsko-zagorska',
               'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
               'updated_at'=>NULL
              ),
              array(
               'naziv'=>'Sisačko-moslavačka',
               'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
               'updated_at'=>NULL
              ),
              array(
               'naziv'=>'Karlovačka',
               'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
               'updated_at'=>NULL
              ),
              array(
               'naziv'=>'Varaždinska',
               'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
               'updated_at'=>NULL
              ),              
            )
            );
    }
}
