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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->bigIncrements('id_transaksi');
            $table->bigInteger('id_barang')->unsigned();
            $table->foreign('id_barang')->references('id_barang')->on('data_barang')->onDelete('cascade');
            $table->date('tgl_transaksi');
            $table->integer('jumlah_beli');
            $table->integer('jumlah_bayar');
            $table->integer('stok_barang');
            $table->string('keterangan');
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
        Schema::dropIfExists('transaksi');
    }
};
