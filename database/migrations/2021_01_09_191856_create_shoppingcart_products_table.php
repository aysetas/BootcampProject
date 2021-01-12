<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShoppingcartProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shoppingcart_products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('shopping_carts_id')->unsigned();
            $table->integer('products_id')->unsigned();
            $table->integer('quantity'); //miktar
            $table->decimal('price',5,2);
            $table->string('position',30); //durum
            $table->timestamp('deleted_at')->nullable();
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
        Schema::dropIfExists('shoppingcart_products');
    }
}
