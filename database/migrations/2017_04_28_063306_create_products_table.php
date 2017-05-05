<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('category_id')->unsigned();
            $table->decimal('price', 10, 0);
            $table->float('sale_percent')->unsigned();
            $table->float('display_size')->unsigned();
            $table->string('feature_image');
            $table->string('image_list');
            $table->integer('quantity')->unsigned()->default(0);
            $table->string('guarantee')->nullable();
            $table->string('color', 50);
            $table->integer('internal_memory')->unsigned();
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
        Schema::dropIfExists('products');
    }
}
