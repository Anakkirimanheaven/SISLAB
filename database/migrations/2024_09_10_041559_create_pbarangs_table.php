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
        Schema::create('pbarangs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_peminjam');
            $table->string('email');
            $table->string('instansi');
            $table->foreignId('id_barang')->onDelete('cascade');
            $table->foreignId('id_ruangan')->onDelete('cascade');
            $table->date('tanggal_peminjaman');
            $table->string('keterangan');
            $table->foreignId('id_kondisi')->onDelete('cascade');
            $table->string('dokumentasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pbarangs');
    }
};
