<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInputsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inputs', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('id', 10)->unsigned();
            $table->string('document_number', 250);
            $table->string('sellers_dispatcher', 250);
            $table->integer('user_id', false, true)->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('wearehouse_id', false, true)->unsigned();
            $table->foreign('wearehouse_id')->references('id')->on('wearehouses');
            $table->integer('client_id', false, true)->unsigned();
            $table->foreign('client_id')->references('id')->on('clients');
            $table->dateTime('enter_date');
            $table->dateTime('exit_date');
            $table->string('driver_name', 100);
            $table->string('vehicle_registration', 60);
            $table->boolean('canelled');
            $table->string('cancelled_comment', 250);
            $table->string('note', 250);
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
        Schema::dropIfExists('inputs');
    }
}
