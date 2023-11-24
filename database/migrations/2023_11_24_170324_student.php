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
        Schema::create('siswa', function (Blueprint $table) {

            $table->id();
            $table->string('nama_siswa');
            $table->integer('nis')->unique();
            $table->string('kelas');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('type_id');
            $table->foreign('category_id')->references('id')->on('category');
            $table->foreign('type_id')->references('id')->on('type');
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
        Schema::dropIfExists('siswa');
    }
};
