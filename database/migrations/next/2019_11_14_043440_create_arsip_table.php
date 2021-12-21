<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArsipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arsip', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_arsip');
            $table->date('tanggal_upload');
            $table->integer('tahun_arsip');
            $table->integer('bulan_arsip');
            $table->string('nomor_sementara');
            $table->string('nomor_berkas');
            $table->string('nomor_box');
            $table->string('nomor_rak');
            $table->string('nomor_kbu');
            $table->integer('satuan_jumlah_id');
            $table->integer('arsip_kondisi_id');
            $table->integer('index_id');
            $table->integer('arsip_lokasi_id');
            $table->integer('arsip_pemilik_id');
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
        Schema::dropIfExists('arsip');
    }
}
