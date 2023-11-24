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
        Schema::create('student', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('student_name');
            $table->integer('nis')->unique();
            $table->string('class');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('types_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('types_id')->references('id')->on('types');
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
        Schema::dropIfExists('student');
    }
};
