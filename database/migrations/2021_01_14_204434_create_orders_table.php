<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nameSurname',100)->nullable();
            $table->string('address',200)->nullable();
            $table->string('phone', 15)->nullable();
            $table->string('mobilephones', 15)->nullable();
            $table->integer('shopping_carts_id')->unsigned()->unique();
            $table->decimal('order_amount', 10 ,4); //sipariş tutarı
            $table->string('status', 30)->nullable(); //durum
            $table->string('bank', 20)->nullable();
            $table->integer('installment_number')->nullable()->unsigned(); //taksit sayısı
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();

            $table->foreign('shopping_carts_id')->references('id')->on('shopping_carts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
