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
        Schema::create('jadwals', function (Blueprint $table) {
            $table->id();
            // Ibadah raya minggu
            $table->string('nama_kegiatan');
            $table->time('waktu');
            $table->string('tanggal');
            $table->string('tempat');

            // Ibadah tenggah minggu    

            // Doa puasa

            //Latihan praise dan ibadah(PW)

            // Ibadah Youth

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwals');
    }
};
