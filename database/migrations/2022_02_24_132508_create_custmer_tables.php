<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustmerTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers_table', function (Blueprint $table) {
            $table->id();
            $table->string("Cname");
            $table->string("Cfname");
            $table->bigInteger("Number");
            $table->string("Email");
            $table->longText("Address");
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
        Schema::dropIfExists('custmers_table');
    }
}
