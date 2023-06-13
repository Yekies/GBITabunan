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
        Schema::create('dewasa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('terdaftarsejak_tgl');
            $table->string('tl');
            $table->date('tanggal_l');
            $table->enum('jenis', ['Laki-laki', 'Perempuan']);
            $table->string('no_telpon');
            $table->string('status_p');
            $table->string('gambar');
            $table->string('nama_lengkap');
            $table->string('tst');

            $table->date('tgl_penyeraan_a');
            $table->string('no_pa');
            $table->string('dilayani_oleha');
            $table->string('gereja_pa');

            $table->date('tgl_baptis');
            $table->string('no_bs');
            $table->string('dilayani_olehb');
            $table->string('gereja_bs');

            $table->date('tgl_pernikaan');
            $table->string('no_pn');
            $table->string('dilayani_olehc');
            $table->string('gereja_per');

            $table->string('brb_c');

            $table->string('mengikuti_fa');
            $table->string('no_fa');
            $table->string('melayani');
            $table->string('bidang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dewasa');
    }
};
