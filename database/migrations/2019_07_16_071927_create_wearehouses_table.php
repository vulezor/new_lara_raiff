<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWearehousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wearehouses', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('id', 10)->unsigned();
            $table->string('name', 250)->nullable();
            $table->string('address', 250)->nullable();
            $table->integer('place_id', false, true)->nullable()->length(10);
            $table->foreign('place_id')->references('id')->on('places')->onDelete('cascade');
            $table->string('scale_type', 250)->nullable();
            $table->string('scale_port', 250)->nullable();
            $table->boolean('allowed_scale_measurement')->default(0);
            $table->string('longitude')->nullable();
            $table->string('latitude')->nullable();
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
        
        Schema::dropIfExists('wearehouses');
    }
}
