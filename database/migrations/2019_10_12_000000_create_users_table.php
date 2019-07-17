<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('id', 10)->unsigned();
            $table->string('name', 250);
            $table->string('last_name', 250);
            $table->integer('place_id', false, true)->nullable()->length(10);
            $table->foreign('place_id')->references('id')->on('places')->onDelete('set null');
            $table->integer('wearehouse_id', false, true)->nullable()->length(10);
            $table->foreign('wearehouse_id')->references('id')->on('wearehouses')->onDelete('set null');
            $table->string('address', 250)->nullable();
            $table->string('email', 200)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password', 200);
            $table->integer('jmbg', false, true)->nullable()->unsigned();
            //$table->integer('role_id', false, true)->length(10)->nullable();
            //$table->foreign('role_id')->references('id')->on('roles')->onDelete('set null');
            $table->boolean('active')->default(1);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
