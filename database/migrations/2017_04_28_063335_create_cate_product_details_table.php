<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCateProductDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cate_product_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->unsigned();
            $table->string('display_size');
            $table->string('os');
            $table->string('front_camera');
            $table->string('behind_camera');
            $table->string('CPU');
            $table->string('RAM');
            $table->string('ROM');
            $table->string('simcard_type');
            $table->string('battery');
            $table->integer('created_by')->unsigned();
            $table->integer('updated_by')->unsigned();
            

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
        Schema::dropIfExists('cate_product_details');
    }
}
