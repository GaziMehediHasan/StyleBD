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
            $table->string('Name')->nullable();
            $table->string('Email')->nullable();
            $table->string('Phone')->nullable();
            $table->double('Amount')->nullable();
            $table->string('Address')->nullable();
            $table->string('Status')->nullable();
            $table->string('Transaction_id')->nullable();
            $table->string('Currency')->nullable();
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
