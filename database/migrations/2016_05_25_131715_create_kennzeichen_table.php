<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKennzeichenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kennzeichen', function (Blueprint $table) {
             $table->increments('id');
        $table->string('identifier');
        $table->string('Stadt');
        $table->string('Landkreis');
                $table->string('Bundesland');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('kennzeichen');
    }
}
