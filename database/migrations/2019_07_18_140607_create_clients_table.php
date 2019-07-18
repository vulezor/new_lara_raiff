<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('id', 10)->unsigned();
            $table->string('cypher', 250)->nullable();
            $table->string('name', 250)->nullable();
            $table->string('director_name', 250)->nullable();
            $table->string('last_name', 250)->nullable();
            $table->string('address', 250)->nullable();
            $table->integer('place_id', false, true)->nullable()->length(10);
            $table->foreign('place_id')->references('id')->on('places')->onDelete('set null');
            $table->integer('brlk', false, true)->nullable();
            $table->string('sup', 250)->nullable();
            $table->string('jmbg', 100)->nullable();
            $table->string('telephone', 250)->nullable();
            $table->string('cell', 250)->nullable();
            $table->string('fax', 250)->nullable();
            $table->string('email', 250)->nullable();
            $table->string('agricultural_identification', 250)->nullable();
            $table->string('tax_identification', 250)->nullable();
            $table->string('identification_number', 250)->nullable();
            $table->boolean('pdv')->default(0);
            $table->boolean('active')->default(1);
            $table->string('bank_name', 250)->nullable();
            $table->string('bank_account', 250)->nullable();
            $table->integer('client_type_id', false, true)->nullable()->length(10);
            $table->foreign('client_type_id')->references('id')->on('client_types')->onDelete('cascade');
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
        Schema::dropIfExists('clients');
    }
}
