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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('nama_ka');
            $table->enum('kelas', ['ekonomi', 'bisnis', 'eksekutif']);
            $table->date('tanggal_keberangkatan');
            $table->string('kota_asal');
            $table->string('kota_tujuan');
            $table->string('stasiun_asal');
            $table->string('stasiun_tujuan');
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
        Schema::dropIfExists('services');
    }
};
