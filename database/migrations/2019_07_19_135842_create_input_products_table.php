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
            $table->foreign('product_id')->references('id')->on('product');
            $table->decimal('outage', 15, 3)->default(0);
            $table->decimal('net_weight', 15, 3)->default(0);
            $table->decimal('gross_weight', 15, 3)->default(0);
            $table->decimal('tare_weight', 15, 3)->default(0);
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
