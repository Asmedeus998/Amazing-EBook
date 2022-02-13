<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->string('account_id', 15)->primary();
            $table->string('first_name', 25);
            $table->string('middle_name', 25);
            $table->string('last_name', 25);
            $table->string('email', 50);
            $table->string('password', 50);
            $table->string('display_picture_link', 255);
            $table->integer('delete_flag');
            $table->date('modified_at_date');
            $table->string('modified_by', 255);

            $table->integer('role_id');
            $table->foreign('role_id')->references('role_id')->on('roles');

            $table->integer('gender_id');
            $table->foreign('gender_id')->references('gender_id')->on('genders');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accounts');
    }
};
