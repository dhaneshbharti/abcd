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
            $table->id();
            $table->integer('product_id');
            $table->integer('order_id');
            $table->decimal('net_amount');
            $table->integer('tax');
            $table->decimal('gross_amount');
            $table->longText('biling_address');
            $table->integer('biling_city_id');
            $table->integer('biling_state_id');
            $table->integer('biling_country_id');
            $table->longText('shipping_address');
            $table->integer('shipping_city_id');
            $table->integer('shipping_state_id');
            $table->integer('shipping_country_id');
            $table->string('transaction_status');
            $table->string('bank_response_code');
            $table->string('package_status');
            $table->date('transaction_date');
            $table->timestamps();
            $table->integer('deleted_at');

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
