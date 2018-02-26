<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Faker\Generator as Faker;

class CreateStudsTable extends Migration
{ 
  /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     $faker = Faker\Factory::create();
        Schema::create('studs', function (Blueprint $table) {
            $table->increments('id');
            $table->char('imestud',40);
            $table->char('prezstud',40);
             $table->integer('pbrrod')
                ->unsigned()
                ->nullable()
                ->index('pbrrod');
             $table->integer('pbrstan')
                ->unsigned()
                ->nullable()
                ->index('pbrstan');  
             $table->dateTime('datrodstud')->nullable();
             $table->char('jmbgstud',13)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('studs');
    }
}
