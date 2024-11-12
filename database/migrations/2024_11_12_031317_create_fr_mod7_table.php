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
        Schema::create('fr_mod7', function (Blueprint $table) {
            $table->integer('id')->index('id');
            $table->integer('hasil')->nullable();
            $table->string('kegiatan', 87)->nullable();
            $table->string('waktu_terbaik', 41)->nullable();
            $table->string('rekomendasi', 127)->nullable();
            $table->string('arah', 10)->nullable();
            $table->string('makna_rah', 182)->nullable();
            $table->string('peluang_bisnis', 19)->nullable();
            $table->string('situasi_dagang', 22)->nullable();
            $table->string('kondisi_pekerjaan', 9)->nullable();
            $table->string('peluang_jabatan', 18)->nullable();
            $table->string('jual_beli', 19)->nullable();
            $table->string('keuntungan', 25)->nullable();
            $table->string('kerugian', 16)->nullable();
            $table->string('kerjasama', 20)->nullable();
            $table->string('janji_pertemuan', 18)->nullable();
            $table->string('keuangan', 10)->nullable();
            $table->string('planet_a', 7)->nullable();
            $table->string('planet_id', 9)->nullable();
            $table->string('planet_u', 9)->nullable();
            $table->string('symbol', 1)->nullable();

            $table->primary(['id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fr_mod7');
    }
};
