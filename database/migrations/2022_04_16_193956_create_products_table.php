<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('voucer_id')->nullable();
            $table->unsignedBigInteger('topping_id')->nullable();
            $table->string('name');
            $table->string('image')->nullable();
            $table->string('description_product');
            $table->string('suhu');
            $table->string('ukuran');
            $table->string('gula');
            $table->string('es');
            $table->integer('price');
            $table->integer('promo')->nullable();
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
        Schema::dropIfExists('products');
    }
}
