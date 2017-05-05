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
            $table->string('display_detail');
            $table->string('os')->nullable();
            $table->string('size');
            $table->string('design');
            $table->string('front_camera')->nullable();
            $table->string('behind_camera')->nullable();
            $table->integer('weight')->unsigned();
            $table->string('cpu')->nullable();
            $table->integer('ram')->unsigned()->nullable();
            $table->string('sim');
            $table->string('connect');
            $table->string('battery');
            $table->string('technical');
            $table->string('extenal_memory')->nullable();
            $table->text('description')->nullable();
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
