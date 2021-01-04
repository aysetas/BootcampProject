<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('products_id')->unsigned()->unique();
            $table->boolean('show_slider')->default(0);
            $table->boolean('show_opportunity_day')->default(0); //günün fırsatını göster
            $table->boolean('show_featured')->default(0);        //öne çıkanlar
            $table->boolean('show_bestseller')->default(0);      //çok satanlar
            $table->boolean('show_discounted')->default(0);       //indirimli


            $table->foreign('products_id')->references('id')->on('products')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_details');
    }
}
