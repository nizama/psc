<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePhysicalDamagesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('physical_damages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('case_id')->unsigned();
            $table->integer('condition_damage_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('case_id')->references('id')->on('cases');
            $table->foreign('condition_damage_id')->references('id')->on('condition_damages');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('physical_damages');
    }
}
