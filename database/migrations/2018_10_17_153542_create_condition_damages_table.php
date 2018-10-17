<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConditionDamagesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('condition_damages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('condition_id')->unsigned();
            $table->integer('damage_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('condition_id')->references('id')->on('conditions');
            $table->foreign('damage_id')->references('id')->on('damages');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('condition_damages');
    }
}
