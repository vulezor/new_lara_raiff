<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInputProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('input_products', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('id', 10)->unsigned();
            $table->integer('input_id', false, true)->unsigned();
            $table->foreign('input_id')->references('id')->on('inputs');
            $table->integer('product_id', false, true)->unsigned();
            $table->foreign('product_id')->references('id')->on('products');
            $table->integer('lot_id', false, true)->nullable()->unsigned();
            $table->foreign('lot_id')->references('id')->on('lots');
            $table->decimal('outage', 15, 3)->nullable();
            $table->decimal('srps', 15, 3)->nullable();
            $table->decimal('quantity', 15, 3)->nullable();
            $table->decimal('net_weight', 15, 3)->nullable();
            $table->decimal('gross_weight', 15, 3)->nullable();
            $table->decimal('tare_weight', 15, 3)->nullable();
            $table->decimal('moisture', 15, 3)->nullable();
            $table->decimal('dirt', 15, 3)->nullable();
            $table->decimal('hectolitre', 15, 3)->nullable();
            $table->decimal('fracture', 15, 3)->nullable();
            $table->decimal('defect', 15, 3)->nullable();
            $table->decimal('protein', 15, 3)->nullable();
            $table->decimal('gluten', 15, 3)->nullable();
            $table->decimal('energy', 15, 3)->nullable();
            $table->decimal('oil', 15, 3)->nullable();
            $table->decimal('drop_number', 15, 3)->nullable();
            $table->decimal('before drying', 15, 3)->nullable();
            $table->decimal('drying', 15, 3)->nullable();
            $table->decimal('drying_cost', 15, 3)->nullable();
            $table->decimal('dry grain', 15, 3)->nullable();
            $table->float('n_x_moisture', 15, 7)->nullable();
            $table->float('n_x_dirt', 15, 7)->nullable();
            $table->float('n_x_fracture', 15, 7)->nullable();
            $table->float('n_x_defect', 15, 7)->nullable();
            $table->float('n_x_hectolitre', 15, 7)->nullable();
            $table->decimal('price', 15, 7)->nullable();
            $table->integer('payment_day', false, true)->nullable()->unsigned();
            $table->string('note', 15, 3)->nullable();
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
        Schema::dropIfExists('input_products');
    }
}
