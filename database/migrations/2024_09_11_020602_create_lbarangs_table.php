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
        Schema::create('lbarangs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pbarang')->onDelete('cascade');
            $table->foreignId('kondisi')->onDelete('cascade');
            $table->string('dokumentasi');
            $table->string('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lbarangs');
    }
};
