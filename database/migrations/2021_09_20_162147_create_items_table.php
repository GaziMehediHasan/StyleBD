<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('ItemsType');
            $table->integer('Price');
            $table->integer('Discount')->nullable();
            $table->integer('Ratings')->nullable();
            $table->unsignedBigInteger('Cat_ID');
            $table->string('Photo');
            $table->foreign('Cat_ID')->references('Cat_ID')->on('Categories')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('items');
    }
}
