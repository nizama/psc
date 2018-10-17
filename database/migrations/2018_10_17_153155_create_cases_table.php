<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCasesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cases', function (Blueprint $table) {
            $table->increments('id');
            $table->string('serial_code');
            $table->string('barcode');
            $table->string('customer_name');
            $table->string('customer_phone');
            $table->string('id_card_no');
            $table->integer('product_id')->unsigned();
            $table->integer('brand_id')->unsigned();
            $table->string('model_number');
            $table->string('serial_number');
            $table->text('customer_complain');
            $table->text('reg_counter_checkup');
            $table->integer('warranty_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('status_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('brand_id')->references('id')->on('brands');
            $table->foreign('warranty_id')->references('id')->on('warranties');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('status_id')->references('id')->on('statuses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cases');
    }
}
