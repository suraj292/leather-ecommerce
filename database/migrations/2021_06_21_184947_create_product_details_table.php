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
            $table->id();
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade');
            $table->string('title');
            $table->string('dimension')->nullable();
            $table->char('description')->nullable();
            $table->char('care_instruction')->nullable();
            $table->longText('specification')->nullable();
            $table->string('price')->nullable();
            $table->string('offer_price')->nullable();
            $table->string('gender')->nullable();
            $table->boolean('return')->nullable();
            $table->boolean('sale')->nullable();
            $table->boolean('discount')->nullable();
            $table->boolean('italian')->nullable();
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
