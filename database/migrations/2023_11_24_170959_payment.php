<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Ramsey\Uuid\Type\Integer;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id();

            $table->integer('pembangunan')->nullable();
            $table->integer('tunggakan')->nullable();
            $table->integer('spp')->nullable();
            $table->integer('lab')->nullable();
            $table->integer('osis')->nullable();
            $table->integer('semester_ganjil')->nullable();
            $table->integer('semester_genap')->nullable();
            $table->integer('psg')->nullable();
            $table->integer('uas')->nullable();
            $table->integer('alumni')->nullable();
            $table->string('keterangan')->nullable();
            $table->unsignedBigInteger('siswa_id');
            $table->foreign('siswa_id')->references('id')->on('siswa');
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
        Schema::dropIfExists('pembayaran');
    }
};
