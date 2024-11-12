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
        Schema::create('fr_mod9', function (Blueprint $table) {
            $table->integer('id')->index('id');
            $table->string('judul', 100)->nullable();
            $table->longText('karakter')->nullable();
            $table->longText('dominan')->nullable();
            $table->longText('personality_1')->nullable();
            $table->longText('personality_2')->nullable();
            $table->string('warna', 100)->nullable();
            $table->string('iq', 400)->nullable();
            $table->string('kecerdasan_utama', 355)->nullable();
            $table->string('deskripsi', 355)->nullable();
            $table->string('kecerdasan_majemuk_1', 200)->nullable();
            $table->string('kecerdasan_majemuk_2', 200)->nullable();
            $table->string('cara_berfikir', 400)->nullable();
            $table->string('cara_belajar', 400)->nullable();
            $table->string('cara_bekerja', 400)->nullable();
            $table->longText('minat')->nullable();
            $table->longText('bakat')->nullable();
            $table->longText('kegemaran')->nullable();
            $table->longText('jurusan_sekolah')->nullable();
            $table->string('img_kesehatan', 200)->nullable();
            $table->string('organ', 300)->nullable();
            $table->string('fungsi', 300)->nullable();
            $table->string('penyakit', 300)->nullable();
            $table->string('penyebab', 300)->nullable();
            $table->string('gejala_ringan', 300)->nullable();
            $table->string('keluhan', 300)->nullable();
            $table->string('cara_terapi', 300)->nullable();
            $table->string('penanganan', 300)->nullable();
            $table->string('asupan', 300)->nullable();
            $table->string('olahraga', 300)->nullable();
            $table->string('bisnis', 300)->nullable();
            $table->string('dagang', 300)->nullable();
            $table->string('pekerjaan', 300)->nullable();
            $table->string('jabatan', 300)->nullable();

            $table->unique(['id'], 'id_2');
            $table->index(['id'], 'mod10_id');
            $table->unique(['id'], 'mod10_id_2');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fr_mod9');
    }
};
