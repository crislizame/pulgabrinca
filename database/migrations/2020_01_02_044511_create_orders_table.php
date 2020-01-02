<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('payment_method_id');
            $table->unsignedBigInteger('shipping_method_id');
            $table->unsignedBigInteger('shipping_profile_address_id');
            $table->decimal('price',10,2);
            $table->decimal('order_amount',10,2);
            $table->decimal('site_feed',10,2);
            $table->decimal('tax_amount',10,2);
            $table->integer('quantity');
            $table->date('create_at');
            $table->date('shipping_at');
            $table->string('shipping_track_code',100); 
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
        Schema::dropIfExists('orders');
    }
}
