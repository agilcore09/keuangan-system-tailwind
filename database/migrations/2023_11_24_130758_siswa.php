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
            $table->unsignedBigInteger('categories_id');
            $table->foreign('categories_id')->references('categories')->on('id');
            // $table->integer('types_id')->unsigned();
            // $table->foreign('types_id')->references('id')->on('type');
            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();
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
