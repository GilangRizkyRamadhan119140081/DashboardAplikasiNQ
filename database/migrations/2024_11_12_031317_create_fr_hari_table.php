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
        Schema::create('fr_hari', function (Blueprint $table) {
            $table->integer('id')->index('id');
            $table->string('hari_id', 6)->nullable();
            $table->string('hari_sa', 15);
            $table->string('hari_lt', 15);
            $table->integer('kadar')->nullable();
            $table->integer('kadar_kecil')->nullable();
            $table->string('asma_sa', 20)->nullable();
            $table->string('asma_id', 21)->nullable();
            $table->integer('asma_kadar')->nullable();
            $table->integer('asma_kadar_kecil')->nullable();
            $table->string('asma_arti', 28)->nullable();
            $table->integer('max_dzikir')->nullable();
            $table->integer('min_dzikir')->nullable();
            $table->string('malaikat_sa', 15)->nullable();
            $table->string('malaikat_id', 15)->nullable();
            $table->integer('malaikat_kadar')->nullable();
            $table->integer('malaikat_kadar_kecil')->nullable();
            $table->string('malaikat_tugas', 96)->nullable();
            $table->string('malaikat_sifat', 65)->nullable();
            $table->string('arah_sa', 13)->nullable();
            $table->string('arah_id', 10)->nullable();
            $table->integer('arah_kadar')->nullable();
            $table->integer('arah_kadar_kecil')->nullable();
            $table->string('warna_sa', 9)->nullable();
            $table->string('warna_id', 6)->nullable();
            $table->string('posisi_sa', 5)->nullable();
            $table->string('posisi_id', 6)->nullable();

            $table->unique(['id'], 'id_2');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fr_hari');
    }
};
