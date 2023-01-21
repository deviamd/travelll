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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->bigIncrements('idt');
            $table->unsignedBigInteger('id');
            $table->unsignedBigInteger('id_orders');
            $table->integer('total_bayar');
            $table->enum('metode_pembayaran', ['gopay', 'e-banking', 'supermarket']);
            $table->date('tanggal_pembayaran');

            $table->foreign('id')->references('id')->on('services')->onDelete('cascade');
            $table->foreign('id_orders')->references('id')->on('orders')->onDelete('cascade');
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
        Schema::dropIfExists('transaksis');
    }
};
