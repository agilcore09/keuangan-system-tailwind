<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Extension\Table\Table;
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
        Schema::create('pembukuan', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal')->nullable();
            $table->string('kode')->nullable();
            $table->string('uraian')->nullable();
            $table->integer('penerimaan')->nullable();
            $table->integer('pengeluaran')->nullable();
            $table->integer('saldo')->nullable();
            $table->unsignedBigInteger('type_id');
            $table->foreign('type_id')->references('id')->on('type_pembukuan');
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
        Schema::dropIfExists('pembukuan');
    }
};
