<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_transaksi', function (Blueprint $table) {
            $table->increments('transaksi_id');
            $table->string('transaksi_nama_barang');
            $table->string('transaksi_nama_pelanggan');
            $table->string('transaksi_tanggal');
            $table->string('transaksi_jumlah_beli');
            $table->string('transaksi_total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_transaksi');
    }
};
