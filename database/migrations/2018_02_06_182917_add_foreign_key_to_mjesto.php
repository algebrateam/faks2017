<?php
/**
 * ~\Code\faks2017 [master ↑1 +3 ~1 -0 !]> php artisan make:migration add_foreign_key_to_mjesto
Created Migration: 2018_02_06_182917_add_foreign_key_to_mjesto
 * 
 * 
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToMjesto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mjestos',function(Blueprint $table){
          $table->foreign('zupanija_id','mjesto_ibfk_1')
              ->references('id')
              ->on('zupanijas')
              ->onUpdate('RESTRICT')
              ->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mjestos',function(Blueprint $table){
          $table->dropForeign('mjesto_ibfk_1');
        });
    }
}
