<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->engine = 'InnoDB';
            $table->integer('id', 10)->unsigned();
            $table->string('name', 250);
            $table->string('cypher', 250)->unique();
            $table->integer('sort_of_product_id', false, true)->unsigned();
            $table->foreign('sort_of_product_id')->references('id')->on('sort_of_products');
            $table->integer('type_of_product_id', false, true)->unsigned();
            $table->foreign('type_of_product_id')->references('id')->on('type_of_products');
            $table->integer('measurement_unit_id', false, true)->unsigned();
            $table->foreign('measurement_unit_id')->references('id')->on('measurement_units');
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
