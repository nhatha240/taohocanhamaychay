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
            $table->id('idproducts');
            $table->string('name');
            $table->bigInteger('price');
            $table->longText('des');
            $table->integer('id_subcata');
            $table->json('brands');
            $table->json('id_color');
            $table->string('image');
            $table->bigInteger('rating');
            $table->json('size');
            $table->integer('stock');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *~
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
