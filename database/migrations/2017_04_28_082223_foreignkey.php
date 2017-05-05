<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Foreignkey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rates', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });
        Schema::table('rates', function (Blueprint $table) {
            $table->foreign('product_id')->references('id')->on('products');
        });

        Schema::table('wishlists', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::table('comments', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')
        });

        Schema::table('orders', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });
        Schema::table('orders', function (Blueprint $table) {
            $table->foreign('deliver_id')->references('id')->on('delivers');
        });
        Schema::table('orders', function (Blueprint $table) {
            $table->foreign('shipper_id')->references('id')->on('shippers');
        });

        Schema::table('products', function (Blueprint $table) {
            $table->foreign('created_by')->references('id')->on('admins');
        });
        Schema::table('products', function (Blueprint $table) {
            $table->foreign('category_id')->references('id')->on('categories');
        });

        Schema::table('cate_product_details', function (Blueprint $table) {
            $table->foreign('category_id')->references('id')->on('categories');
        });

        Schema::table('order_details', function (Blueprint $table) {
            $table->foreign('order_id')->references('id')->on('orders');
        });
        Schema::table('order_details', function (Blueprint $table) {
            $table->foreign('product_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
