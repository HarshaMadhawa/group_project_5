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
        Schema::create('students', function (Blueprint $table) {
            //$table->id();
            $table->string('id', 45)->nullable()->primary();
            $table->string('Address', 45)->nullable();
            $table->string('City', 45)->nullable();
            $table->string('Date_of_birth', 45)->nullable();
            $table->string('Degree', 45)->nullable();
            $table->string('Batch', 45)->nullable();
            $table->string('GPA', 45)->nullable();
            $table->string('Achievement1', 45)->nullable();
            $table->string('Achievement2', 45)->nullable();
            $table->string('Profile_picture', 45)->nullable();
            $table->string("user_id", 255);

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
        Schema::dropIfExists('students');
    }
};
