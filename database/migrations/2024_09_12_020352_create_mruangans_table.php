<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('mruangans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_ruangan')->onDelete('cascade');
            $table->string('jenis_perbaikan');
            $table->string('waktu_pengerjaan');
            $table->foreignId('kondisi')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mruangans');
    }
};
