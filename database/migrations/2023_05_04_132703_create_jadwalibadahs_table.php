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
        Schema::create('jadwalibadahs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_ibadah');
            $table->string('pengkhotbah');
            $table->string('jenis_ibadah');
            $table->time('waktu');
            $table->date('tanggal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwalibadahs');
    }
};
